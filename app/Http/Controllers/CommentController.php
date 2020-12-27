<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;

class CommentController extends Controller
{
    public function store(){
   	$data=array();
   	$data['website']='newweb.com';
   	$data['email']='wali@gmail.com';
   	$data['text']='very nice';
   	$data['post_id']=1;
   	

   	$comment=Comment::create($data);

   	return response()->json($comment);


   }
}
