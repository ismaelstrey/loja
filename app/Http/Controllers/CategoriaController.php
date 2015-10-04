<?php

namespace App\Http\Controllers;
use Session;
use Illuminate\Http\Request;
use App\Categoria;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class CategoriaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
   /**
     * Display a listing of the resource. categoria
     *
     * @return Response
     */
    public function index()
    {
        $categorias = Categoria::paginate(20);
        return view('categoria.index',compact('categorias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {        
         return view('categoria.new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
            $dados = $request->all();
            Categoria::create($dados);
            Session::flash('success', 'Categoria '.$dados['name'].' adicionada com sucesso!');
            return redirect()->route('categoria.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
         $categoria = Categoria::find($id);        
        return view('categoria.detalhes',compact('categoria'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $categoria = Categoria::find($id);        
        return view('categoria.edit',compact('categoria'));
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
     
        Categoria::find($id)->update($request->all());
        return redirect()->route('categoria.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
       $categoria = Categoria::find($id);
       $categoria->delete();

        // redirect
       Session::flash('success', 'Categoria '.$categoria->name.' deletada com sucesso!');
       return back()->withInput();
    }
     public function search(Request $request)
    {
      
       $categorias = Categoria::where('name','LIKE','%'.$request->pesquisa.'%')->get();  
            
        return view('categoria.index',compact('categorias'));
    }
}
