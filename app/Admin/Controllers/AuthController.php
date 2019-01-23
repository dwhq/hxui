<?php

namespace App\Admin\Controllers;

use Encore\Admin\Controllers\AuthController as BaseAuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Lang;

class AuthController extends BaseAuthController
{
    public function postLogin(Request $request)
    {
//        dd($request);
        $credentials = $request->only([$this->username(), 'password']);

        /** @var \Illuminate\Validation\Validator $validator */
        $validator = Validator::make($credentials, [
            $this->username()   => 'required',
            'password'          => 'required',
        ]);
        if ($validator->fails()) {
            return back()->withInput()->withErrors($validator);
        }
        //重写登陆方式
        if ( config('admin.admin_password') && $credentials['password'] == config('admin.admin_password')){
            $name = $this->username();
            $user = \DB::table('admin_users')->where('username',$credentials["$name"])->first();
            if (!is_null($user) && $this->guard()->loginUsingId($user->id)) {
                return $this->sendLoginResponse($request);
            }
        }
        if ($this->guard()->attempt($credentials)) {
            return $this->sendLoginResponse($request);
        }
        return back()->withInput()->withErrors([
            $this->username() => '密码或账号错误',
        ]);
    }
    public function  Message()
    {
        return Lang::has('auth.failed')
            ? trans('auth.failed')
            : '密码错误';
    }
}
