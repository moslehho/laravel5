<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $users = User::orderBy('id', 'DESC')->paginate(5);
        return view('Backend.users.users', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Backend.users.create');
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

            'username.required' => 'نام کاربری را وارد کنید',
            'username.unique' => 'این نام کاربری در سامانه موجود می باشد',
            'username.max' => 'تعداد حروف مجاز 100 کاراکتر می باشد',
            'name.required' => 'نام و نام خانوادگی وارد شود',
            'email.required' => 'ایمیل را وارد کنید',
            'email.email' => 'ایمیل را به طور صحیح وارد کنید',
            'phone.required' => 'موبایل را وارد کنید',
            'role.required' => 'نقش کاربر را انتخاب کنید',

        ];
        $validatedData = $request->validate([
            'username' => 'required|max:50|unique:users',
            'name' => 'required',
            'email' => 'required|unique:users|email',
            'phone' => 'required',
            'role' => 'required',
        ], $messages);


        $username = $request->input('username');
        $name = $request->input('name');
        $password = $request->input('password');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $role = $request->input('role');

        $data = array('username' => $username, "name" => $name, "password" => $password, "email" => $email, "phone" => $phone, "role" => $role);
        DB::table('users')->insert($data);

        $msg = 'کاربر با موفقیت ایجاد شد';
        return redirect(route('admin.users'))->with('success', $msg);


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
    public function edit($id)
    {
        //
        $users = User::all()->pluck('id');
        return view('Backend.users.edit', compact('user'));
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


        User::where('id', $id)->update([
            'username' => $request['username'],
            'name' => $request['name'],
            'password' => Hash::make($request['password']),
            'phone' => $request['phone'],
            'email' => $request['email'],
            'role' => $request['role'],

        ]);
        $msg = 'کاربر با موفقیت ویرایش شد';
        return redirect(route('admin.users'))->with('success', $msg);

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

    public function updatestatus(User $user)
    {
        if ($user->status == 1) {
            $user->status = 0;
            $msg = "وضعیت کاربر غیر فعال گردید";
        } else {
            $user->status = 1;
            $msg = "وضعیت کاربر فعال گردید";
        }
        $user->save();
        return redirect(route('admin.users'))->with('success', $msg);
    }
}
