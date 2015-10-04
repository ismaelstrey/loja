<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Produto;
use App\Categoria;
use App\Imagem;
use Session;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Image;
use DB;
    



class ProdutoController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $produtos = Produto::all();
       return view('produto.index',compact('produtos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $categoria = Categoria::lists('name','id');
         return view('produto.new', compact('categoria'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {  
        if ($request->file('image')) {
            $detino = public_path('images/produtos/'.date("m-Y").'/');
            $detino2 = public_path('images/produtos/'.date("m-Y").'/thunb/');
            if (!file_exists($detino))
            {
               mkdir($detino);   
            }
            if (!file_exists($detino2))
            {
               mkdir($detino2);   
            }
            $image = $request->file('image');
            $filename  = time().'.'.$image->getClientOriginalExtension();
            $path = $detino.$filename; 
            $path2 = $detino2.$filename; 
            Image::make($image->getRealPath())->resize(200, 200)->save($path);
            Image::make($image->getRealPath())->resize(50, 50)->save($path2);           
        }

        if (!isset($filename)) {
            $filename = 'default.jpg';
        }
        $dados = $request->all();

         // Validação do campos de dados        
                $rules = [
                'name'       =>'required|min:3|max:20',
                'description'=>'required',
                'cat_id'     =>'required',
                'prince'     =>'required',
                'image'      => 'mimes:jpeg,bmp,png|image|required'
                ];
                $validator = Validator::make($dados, $rules);
                if ($validator->fails()) {
                return redirect('produto/create')
                ->withErrors($validator)
                ->withInput();
                }
        // Fim da validação

           Produto::create([
            'name'       =>$dados['name'],
            'description'=>$dados['description'],            
            'image_id'   =>2,
            'cat_id'     =>$dados['cat_id'],
            'prince'     =>$dados['prince'],

            'photo'      =>'images/produtos/'.date("m-Y").'/'.$filename ,
            'thunb'      =>'images/produtos/'.date("m-Y").'/thunb/'.$filename 

            ]);
           Session::flash('success', 'Produto '.$dados['name'].' adicionado com sucesso!');
           return redirect()->route('produto.create');
           // 8 


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
         $produto = Produto::find($id);        
        return view('produto.detalhes',compact('produto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $produto = Produto::find($id); 
        $categoria = Categoria::lists('name','id');      
        return view('produto.edit',compact('produto','categoria'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
     
     $usuario = Produto::find($id)->update($request->all());
        return redirect()->route('produto.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
       $produto = Produto::find($id);
       if (file_exists($produto->photo)) {
            unlink($produto->photo);
            unlink($produto->thunb);
       }
        $produto->delete();

        // redirect
        Session::flash('success', 'Produto '.$produto->name.' deletado com sucesso!');
       return back()->withInput();
    }
       public function search(Request $request)
    {
      
       $produtos = Produto::where('name','LIKE','%'.$request->pesquisa.'%')->get();  
       if($produtos->count() < 1){
        $produtos = Produto::where('description','LIKE','%'.$request->pesquisa.'%')->get();
       } 
          
        return view('produto.index',compact('produtos'));
    }
}