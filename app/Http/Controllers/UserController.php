<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;

class UserController extends Controller
{
   public function store(){
   	$data=array();
   	$data['name']='Wali';
   	$data['email']='abwaliur@gmail.com';
   	$data['password']=Hash::make(12345678);

   	$user=User::create($data);

   	return response()->json($user);


   }

    public function getPost(){
   	$post= User::find(1)->post;
   	return $post;
   }
}
