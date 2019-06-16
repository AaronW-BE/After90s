<?php


namespace App\Http\Controllers;


class AuthController extends Controller
{
    public function __construct()
    {
//        $this->middleware('auth:api', ['except' => ['login']]);
    }

    public function login()
    {
        $credentials = request(['username', 'password']);

        if (! $token = auth('api')->attempt($credentials)) {
//            return response()->json(['error' => 'Unauthorized'], 401);
            return $this->failed("授权失败", 401);
        }

        return $this->success([
            'token' => $token,
            'expire_in' => auth('api')->factory()->getTTL() * 60
        ]);
    }

    public function logout()
    {
        auth('api')->logout();
        return $this->success("退出成功");
    }

    public function info()
    {
        return $this->success([
            'role' => 'admin',
            'name' => 'admin'
        ]);
    }

}