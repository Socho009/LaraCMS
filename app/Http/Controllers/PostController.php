<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    //
    public function index(){

        $posts=Post::orderByDesc('id')
        ->paginate(5);

        return view('posts.post-index')->with('posts',$posts);
    }

    public function add(){
         //$postCategory=config('post_category');
         return view('posts.post-add');//->with('categories')//,$postCategory);
    }
    public function store(Request $request){
        $input_data = $request->all();
        $post = new Post();     
        $post->title = $input_data['title'];
        $post->description = $input_data['description'];
       // $article->author = $input_data['author];
        $post->date="2020-12-12";
        $post->user_id=Auth::user()->id;
        $post->save();
        
        return redirect()->route('post.list');

    }

    public function view(Post $post){
        return view('posts.post-view')->with('post',$post);
    }

    public function update(Request $request){
       // $this->rules['id'] = ['required','exists:expenses,id'];
       
        $postData = $request->all();
        $request=$request->except('_token');
        $postId = $postData['id'];
        unset($postData['id']);

        Post::where('id', $postId)
            ->update($postData)
            ;

        return redirect()->back();

    }

    public function delete(Post $post){
    
        
        $post->delete();
        return redirect()->route('post.list');
    }
}
