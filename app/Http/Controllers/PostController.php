<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function store(){
   	$data=array();
   	$data['title']='Test Post';
   	$data['slug']='test-post';
   	$data['status']='published';
   	$data['user_id']=1;
   	$data['category_id']=1;
   	

   	$post=Post::create($data);

   	return response()->json($post);


   }

    public function getUser(){
   	$user= Post::find(1)->user;
   	return $user;
   }

   public function getComments(){
   	$comments = Post::find(1)->comments;

	foreach ($comments as $comment) {
	    echo $comment->text.'<br>';
	}
   }


}
