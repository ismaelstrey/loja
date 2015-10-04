<?php

namespace App\Http\Controllers;
use App\Post;
use Session;
use Validator;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $posts = Post::all();        
        return view('post.index',compact('posts'));
    }
    public function create()
    {
                
        return view('post.new');
    }

    public function store(Request $request)
    {
    Post::create([
        'title' => $request->title,
        'tags' => $request->tags,
        'content' => $request->content
    ]);
    Session::flash('success', 'Post '.$request->title.' Criado com Sucesso!');
            return redirect()->route('post.index');
    }
    public function show($id)
    {
        $posts = Post::find($id);        
        return view('post.detalhes',compact('posts'));
    }

    public function edit($id)
    {
        $posts = Post::find($id);        
        return view('post.edit',compact('posts'));
    }

    public function update(Request $request, $id)
    {


//validation    

 $rules = array(
            'title'       => 'required',
            'content'      => 'required'
        );
        $validator = Validator::make($request->all(), $rules);
        

        // process the login
        if ($validator->fails()) {
            return Redirect::to('post/' . $id . '/edit')
                ->withErrors($validator)
                ->withInput($request);
        } else {
            // store
            $post = Post::find($id)->update($request->all());
            // redirect
            Session::flash('success', 'Post atualizado com Sucesso!');
            return redirect()->route('post.index');            
        }

       
    }
    public function destroy(Request $request, $id)
    {
             $post = Post::find($request->id);
             $post->delete();   
             Session::flash('success', 'Post deletado com sucesso!');
             return redirect()->route('post.index');  
    }

    public function search(Request $request)
    {
      
       $posts = Post::where('name','LIKE','%'.$request->pesquisa.'%')->get();  
       if($posts->count() < 1){
        $posts = Post::where('email','LIKE','%'.$request->pesquisa.'%')->get();
       }      
        return view('post.index',compact('posts'));
    }
}
