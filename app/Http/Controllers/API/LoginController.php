<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Laravel\Sanctum\HasApiTokens;

class LoginController extends Controller
{
    use HasApiTokens;
    public function login(Request $request)
    {

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $auth = Auth::user();

            // abaikan error ini guys
            $tokenResult = $auth->createToken('auth_token');
            $success['token'] = $tokenResult->plainTextToken;
            $success['name'] = $auth->name;
            // $success['role_id'] = $auth->role_id;

            return response()->json([
                'success' => true,
                'message' => 'Login Berhasil',
                'data' => $success
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Kesalahan Data !',
            ], 401);
        }

        //Logout
    }
    // public function logout(Request $request){
    //     $request->user()->currentAccessToken()->delete();
    //     $auth = Auth::user();
    //     $success['nama'] = $auth->nama;

    //     return response()->json([
    //         'message' => 'Berhasil Logout',
    //         'Akun Yang Logout Adalah' => $success,
    //     ], 200);
    // }
    public function logout(Request $request){
        $request->user()->currentAccessToken()->delete();
        $auth = Auth::user();
        $success['name'] = $auth->name;

        return response()->json([
            'message' => 'Berhasil Logout',
            'Akun Yang Logout Adalah' => $success,
        ], 200);
    }
    public function delete($id){
        $user = User::find($id);
        if (!$user){
            return response()->json([
                'message' => 'Delete Error: User Not Found',
            ],404);
        }
        $user->delete();
        $success['nama'] = $user->nama;
        return response()->json([
            'message' => 'Delete Success',
            'data' => $success
        ],200);
    }

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(),[

            'name'=>'required',
            'email'=>'required|email',
            'password'=>'required',
            // 'role_id'=>'required',
            // 'alamat',
        ]);






        if ($validator->fails()){
            return response()->json([
                'success'=>false,
                'message' =>'Data Yang Anda Masukan Salah!',
                'data' => $validator->errors()
            ]);
        }
        $input = $request->all();
        $input['password'] = bcrypt($input['password']);
        $user = User::create($input);

        $tokenResult = $user->createToken('auth_token');
        $success['token'] = $tokenResult->plainTextToken;
        $success['name'] = $user->name;
        return response()->json([
            'success' => true,
            'message'=>'Data Berhasil Diinput',
            'data'=>$success
        ]);
    }
}
