<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
	public function postCreatePost(Request $request)
	{
		$this->validate($request, [
				'body' => 'required',
			]);
		$post = new Post();
		$post->body = $request['body'];
		$message = 'Vyskytla se chyba.';
		if ($request->user()->posts()->save($post))
		{
			$message = 'Úspěšně sdíleno!';
		}
		return redirect()->route('dashboard')->with(['message' => $message]);
	}

	public function getDashboard()
	{
		$posts = Post::all();
		return view('dashboard', ['posts' => $posts]);
	}

}


?>