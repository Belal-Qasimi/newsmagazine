<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Concerns\InteractsWithInput\input;

use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Cookie;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Tymon\JWTAuth\Http\Parser\Cookies;

class authcontroller extends Controller
{
    public function login(Request $req){
   
      $act=1;

        if(!Auth::attempt($req->only('email','password',)))
        {
     return response([
     'message' => 'invalid credentials !'
     
     ],Response::HTTP_UNAUTHORIZED);
        }
        /**
          * The attributes that should be cast.
          *
          * @var User $user
          */
        $user= Auth::user();
      $token=$user->createToken('token')->plainTextToken;
     $cookie= cookie('jwt',$token,60*24);
      return response([
      
         $user= Auth::user(),
         'token'=>$token,
         'status'=>1
     
      

      ])->withCookie($cookie);
     } 
     
     public function register(Request $req){
        return User::create([
        'name'=> $req ->input('name'),
        'email'=> $req->input('email'),
        'password'=>hash::make( $req->input('password')),
        'typeuser'=> $req->input('typeuser'),
        'phone'=> $req->input('phone'),
        'image'=> $req->input('image'),
      

        ]);
        }
     
        public function user(){
           return Auth::user();
           
        }
        public function logout(){
                /**
          * The attributes that should be cast.
          *
          * @var User $user
          */
          $user = Auth::user();
          
          
           $cookie= Cookie::forget('jwt');
           return response([
              'message'=>'Success'
              
           ])->withCookie($cookie);
        }

        public function upload(Request $req){
     $result = $req->file('file')->store('public');
     return ["result"=>$result];
        }


        public function  udateuser(Request $req,$id){

         $user =new User();
         $user= User::find($id);
         $user->name= $req->name;
         $user->email= $req->email;
         $user->phone= $req->phone;
         $user->image= $req->image;
         $user->save();

        
      }
}
