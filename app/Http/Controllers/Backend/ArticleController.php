<?php

namespace App\Http\Controllers\Backend;

use App\Article;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;
use Illuminate\Support\Facades\DB;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $article = Article::all();
        return view('Backend.article.index', compact('article'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categories = Category::all()->pluck('name', 'id');

        return view('Backend.article.create', compact('categories'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $messages = [
            'name.reqired' => 'نام دسته بندی را وارد کنید',
            'slug.required' => 'آدرس سئو را به انگلیسی وارد کنید',
            'slug.unique' => 'این آدرس قبلا انتخاب شده',
        ];
        $validatedData = $request->validate([
            'name' => 'required',
            'slug' => 'required|unique:articles',
            'description' => 'required',
        ], $messages);


        try {
            $article = new Article();

            $article = $article->create($request->all());
            $article->categories()->attach($request->categories);


        } catch (Exception $exception) {
            switch ($exception->getCode()) {
                case 23000:
                    $msg = "نام مستعار وارد شده تکراری است";
                    break;
            }
            return redirect(route('admin.articles.create'))->with('warning', $msg);
        }


        /**
         * $name = $request->input('name');
         * $slug = $request->input('slug');
         * $username = $request->input('username');
         * $description = $request->input('description');
         * $fulldescription = $request->input('fulldescription');
         * $categories = $request->input('categories');
         * $tags = $request->input('tags');
         *
         * $data = array(
         * 'name' => $name,
         * 'slug' => $slug,
         * 'username' => $username,
         * 'description' => $description,
         * 'fulldescription' => $fulldescription,
         * 'tags' => $tags,
         * 'hit' => '1',
         * 'status' => '0',
         * 'category' => $categories,
         * );
         * DB::table('articles')->insert($data);
         **/


        $msg = 'مقاله با موفقیت ایجاد شد';
        return redirect(route('admin.article'))->with('success', $msg);


    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        //
        $categories = Category::all()->pluck('name', 'id');
        $article = Article::all();
        return view('Backend.article.edit', compact('article', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //

        $messages = [
            'name.required' => 'فیلد عنوان را وارد نمایید',
            'slug.unique' => 'فیلد نام مستعار تکراری است.عنوان را عوض کنید',
            'slug.required' => 'فیلد نام مستعار اجباری است'
        ];
        $validatedData = $request->validate([
            'name' => 'required',
            'slug' => 'required'
        ], $messages);


        try {
            $article->update($request->all());
            $article->categories()->sync($request->categories);
        } catch (Exception $exception) {
            switch ($exception->getCode()) {
                case 23000:
                    $msg = "نام مستعار وارد شده تکراری است";
                    break;
            }
            return redirect(route('admin.articles.edit'))->with('warning', $msg);
        }

        $msg = "ذخیره ی مطلب جدید با موفقیت انجام شد";
        return redirect(route('admin.articles'))->with('success', $msg);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        try {
            $article->delete();
        } catch (Exception $exception) {
            return redirect(route('admin.article'))->with('warning', $exception->getCode());
        }

        $msg = "آیتم مورد نظر حذف گردید";
        return redirect(route('admin.article'))->with('success', $msg);
    }
}
