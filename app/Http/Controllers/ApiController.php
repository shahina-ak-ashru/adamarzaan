<?php
namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class ApiController
{
    public function getProfile(){
        //$user = User::find(request('user-id'));
        $user = auth()->user()->id;
        return response()->json([
            'status'=>200,
            'data'=>[
                'name'=>$user
            ],
            'message'=>'user successfully logedin'
        ]);
    }
    public function login(){
        $user = User::where('email',request('email'))->first();
        if(Hash::check(request('password'),$user->password)){
            $token = $user->createToken('mobile-app')->plainTextToken;
            return response()->json([
                'status'=>200,
                'token'=>$token,
                'message'=>'The creadentials are valid,Login success'
            ]);
        }
        else{
            return response()->json([
                'status'=>250,
                'message'=>'The credentials are invalid,login failed'
            ]);
        }

    }
    public function store(){
        // $input = $request->all();
        // User::create(['name'=>$input['name'],'password'=>encrypt($input['password']),'email'=>$input['input']]);
        User::create(['name'=>request('name'),'password'=>encrypt(request('password')),'email'=>request('email')]);
        return response()->json([
            'status'=>200,
            'data'=>[
                'name'=>request('name')
            ],
            'message'=>'user created successfully'
        ]);
    }
    public function update($id){
        User::where('id',$id)->update(['email'=>request('email')]);
        return response()->json([
            'status'=>200,
            'message'=>'user updated successfully'
        ]);
    }
    public function destroy($id){
        User::where('id',$id)->delete();
        return response()->json([
            'status'=>200,
            'message'=>'user deleted successfully'
        ]);
    }
    public function logout(){
        $user = auth()->user()->id;
        $userId = User::find($user);
        $userId->tokens()->delete();
        return response()->json([
            'status'=>200,
            'message'=>'User logged out successfully'
        ]);
    }
}
