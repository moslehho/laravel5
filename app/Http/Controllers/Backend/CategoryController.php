<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $category = Category::orderBy('id')->paginate(5);
        return view('Backend.category.cat_list', compact('category'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        $category = Category::all();
        return view('Backend.category.create', compact('category'));

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

            'name.unique' => 'این دسته بندی قبلا ایجاد شده',
            'name.reqired' => 'نام دسته بندی را وارد کنید',
            'slug.required' => 'آدرس سئو را به انگلیسی وارد کنید',
            'slug.unique' => 'این آدرس قبلا انتخاب شده',
        ];
        $validatedData = $request->validate([
            'name' => 'required|max:50|unique:categories',
            'slug' => 'required|unique:categories',
        ], $messages);

        $name = $request->input('name');
        $slug = $request->input('slug');
        $parentid = $request->input('parentid');

        $data = array('name' => $name, 'slug' => $slug, 'parentid' => $parentid);
        DB::table('categories')->insert($data);

        $msg = 'دسته بندی با موفقیت ایجاد شد';
        return redirect(route('admin.category.create'))->with('success', $msg);
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
    public function edit(Category $category)
    {
        //
        $categori = Category::all();
        return view('Backend.category.edit', compact('category' , 'categori'));
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
        Category::where('id', $id)->update([
            'name' => $request['name'],
            'slug' => $request['slug'],
            'parentid' => $request['parentid'],

        ]);
        $msg = 'دسته بندی با موفقیت ویرایش شد';
        return redirect(route('admin.category'))->with('success', $msg);




    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
