<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Comment;
use App\Product;
use Auth;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Auth as FacadesAuth;
use Illuminate\Support\Facades\Redirect;

class CommentController extends Controller
{
  

  public function comments($productId) {
    $comments = Comment::whereProduct_id($productId)->get();
    return response()->json(['status' , 'comments',$comments], 200);
  }

    public function store(Request $request)
    {
      $comment = new Comment();
      $comment->user_id = Auth::id();
      $comment->product_id = $request->product_id;
      $comment->body = $request->body;
      if($comment->save()) {
        if($request->ajax()) {
          return response()->json(['status' , 'success' , 'msg' => 'comment was added'],200);
        }
        Session::flash('success' , 'comment created');
        return Redirect::back();
      } else {
        
        return response()->json(['status' , 'failed' , 'msg' => 'comment creation failed'],422);
      }
      Session::flash('error' , 'comment creation failed');
      return Redirect::back();
      }
  }
