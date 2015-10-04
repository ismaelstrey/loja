<?php

namespace App\Http\Controllers;
use Session;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use App\Estado;
use App\Http\Requests;
use App\Http\Controllers\Controller;


class EstadoController extends Controller
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
        $estados = Estado::paginate(20);
        return view('estado.index',compact('estados'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        
         return view('estado.new');
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
         Estado::create($dados);
           Session::flash('success', 'Produto '.$dados['name'].' adicionado com sucesso!');
           return redirect()->route('estado.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
         $estado = Estado::find($id);        
        return view('estado.detalhes',compact('estado'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $estado = Estado::find($id);        
        return view('estado.edit',compact('estado'));
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
     
     $usuario = Estado::find($id)->update($request->all());
        return redirect()->route('estado.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
       $estado = Estado::find($id);
       $estado->delete();

        // redirect
        Session::flash('success', 'Estado deletado com sucesso!');
       return back()->withInput();
    }
}