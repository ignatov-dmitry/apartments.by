<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    private $messages = [
        'required' => 'Обязательное поле',
        'min'     => 'Минимальное количество знаков: :min',
        'max'     => 'Максимальное количество знаков: :max'
    ];

    public function getManagers(){
        return view('admin.users.managers_list',[
            'head_text' => 'Менеджеры',
            'managers'  => User::all()->where('role', 2)
        ]);
    }

    public function addManager(Request $request){
        $request = $request->all();
        $password = str_random(8);
        $validator = \Validator::make($request, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            //'password' => 'required|string|min:6|confirmed',
        ], $this->messages)->validate();

        User::create([
            'name'     => $request['name'],
            'email'    => $request['email'],
            'role'     => 2,
            'status'   => 1,
            'password' => bcrypt($password),
        ]);

        return view('admin.users.success', [
            'email'    => $request['email'],
            'password' => $password,
            'head_text' => 'Менеджер добавлен'
        ]);
    }

    public function getCustomers(){
        return view('admin.users.customers_list',[
            'head_text' => 'Пользователи',
            'customers'  => User::all()->where('role', 3)
        ]);
    }

    public function addCustomer(Request $request){
        $request = $request->all();
        $password = str_random(8);
        $validator = \Validator::make($request, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            //'password' => 'required|string|min:6|confirmed',
        ], $this->messages)->validate();

        User::create([
            'name'     => $request['name'],
            'email'    => $request['email'],
            'role'     => 3,
            'status'   => 1,
            'password' => bcrypt($password),
        ]);

        return view('admin.users.success', [
            'email'     => $request['email'],
            'password'  => $password,
            'head_text' => 'Пользователь добавлен'
        ]);
    }


    public function getUser($id){
        $user = User::whereId($id)->first();
        return view('admin.users.user', [
            'user'      => $user,
            'head_text' => 'Редактировать пользователя '
        ]);
    }

    public function updateUser(Request $request){
        $user = User::whereId($request->id)->first();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();
        return redirect()->back();
    }

    public function deleteUser(Request $request){
        $user = User::whereId($request->id)->first();
        $user->delete();

        return redirect()->back();
    }

}
