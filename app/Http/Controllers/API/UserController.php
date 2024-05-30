<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function logout(Request $request){
        $request->user()->currentAccessToken()->delete();
        $auth = Auth::user();
        $success['nama'] = $auth->nama;

        return response()->json([
            'message' => 'Berhasil Logout',
            'Akun Yang Logout Adalah' => $success,
        ], 200);
    }

    public function index(Request $request){
        $user = $request->user();
        if ($user){
            return response()->json([
                'message' => true,
                'data' => $user
            ],200);
        }else{
            return response()->json([
                'message' => false,
                'data' => 'Data User Tidak Ditemukan',
            ],404);
        }
    }
}
