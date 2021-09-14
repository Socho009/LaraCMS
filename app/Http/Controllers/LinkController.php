<?php

namespace App\Http\Controllers;

use App\Models\Link;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LinkController extends Controller
{
    //
    public function index(){

        $links=Link::orderByDesc('id')
        ->paginate(5);

        return view('links.link-index')->with('links',$links);
    }

    public function add(){
        //$postCategory=config('post_category');
        return view('links.link-add');//->with('categories')//,$postCategory);
   }
   public function store(Request $request){
       $input_data = $request->all();
       $link = new Link();     
       $link->name = $input_data['name'];
       $link->url = $input_data['url'];
      // $article->author = $input_data['author];
       $link->date="2020-12-12";
       $link->user_id=Auth::user()->id;
       $link->save();
       
       return redirect()->route('link.list');

   }

   public function view(Link $link){
       return view('links.link-view')->with('post',$link);
   }

   public function update(Request $request){
      // $this->rules['id'] = ['required','exists:expenses,id'];
      
       $postData = $request->all();
       $request=$request->except('_token');
       $linkId = $postData['id'];
       unset($postData['id']);

       Link::where('id', $linkId)
           ->update($postData)
           ;

       return redirect()->back();

   }

   public function delete(Link $link){
   
       
       $link->delete();
       return redirect()->route('link.list');
   }

}
