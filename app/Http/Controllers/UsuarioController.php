<?php
namespace App\Http\Controllers;
use Session;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use Illuminate\html\form;
use App\User;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Validator;
use Redirect;


class UsuarioController extends Controller
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
        $usuarios = User::all();        
        return view('usuario.index',compact('usuarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
                
        return view('usuario.new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        
     if($request->ajax()){       
        User::create([
                    'name' => $request->name,
                    'email' => $request->email,
                    'password' => bcrypt($request->password)
            ]);
        return response()->json([
            "Menssagem" => "Criado com sucesso"
            ]);

     }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $usuarios = User::find($id);        
        return view('usuario.detalhes',compact('usuarios'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $usuarios = User::find($id);        
        return view('usuario.edit',compact('usuarios'));
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


//validation    

 $rules = array(
            'name'       => 'required',
            'email'      => 'required|email'
        );
        $validator = Validator::make($request->all(), $rules);
        

        // process the login
        if ($validator->fails()) {
            return Redirect::to('usuario/' . $id . '/edit')
                ->withErrors($validator)
                ->withInput($request->except('password'));
        } else {
            // store
            $usuario = User::find($id)->update($request->all());
            // redirect
            Session::flash('message', 'Usuario Atualizado com Sucesso!');
            return redirect()->route('usuario.index');
            // return Redirect::to('usuario.index');
        }

       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy(Request $request, $id)
    {
            if($request->ajax()){
                $usuario = User::find($request->id);
                $usuario->delete();
                }        
    }

    public function search(Request $request)
    {
      
       $usuarios = User::where('name','LIKE','%'.$request->pesquisa.'%')->get();  
       if($usuarios->count() < 1){
        $usuarios = User::where('email','LIKE','%'.$request->pesquisa.'%')->get();
       }      
        return view('usuario.index',compact('usuarios'));
    }
}
