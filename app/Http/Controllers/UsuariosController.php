<?php

namespace App\Http\Controllers;

use App\Models\Usuarios;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;




class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function userProfile()
    {
        return view('modules.profile');
    }

    public function dataUpdate(Request $request)
    {
        var_dump($request['lastname']);
        if(auth() -> user() -> email != request('email')){
            if(isset($datos['passwordN'])){
                $datos = request() -> validate([
                    'udg_code' => ['string','max:255'],
                    'name' => ['required','string','max:255'],
                    'lastname' => ['string','max:255'],
                    'email' => ['required','email','unique:users'],
                ]);
            }else{
                $datos = request() -> validate([
                    'udg_code' => ['string','max:255'],
                    'name' => ['required','string','max:255'],
                    'lastname' => ['string','max:255'],
                    'email' => ['required','email','unique:users'],
                    'passwordN' => ['required','string','min:8','max:255'],
                ]);
            }
        }else{
            if(isset($datos['passwordN'])){
                $datos = request() -> validate([
                    'udg_code' => ['string','max:255'],
                    'name' => ['required','string','max:255'],
                    'lastname' => ['string','max:255'],
                    'email' => ['required','email','unique:users'],
                ]);
            }else{
                $datos = request() -> validate([
                    'udg_code' => ['string','max:255'],
                    'name' => ['required','string','max:255'],
                    'lastname' => ['string','max:255'],
                    'email' => ['required','email','unique:users'],
                    'passwordN' => ['required','string','min:8','max:255'],
                ]);
            }
        }

        if(isset($datos['passwordN'])){
            DB::table('users')->where('id',auth() -> user() -> id)->update([
                'udg_code' => $datos['lastname'],
                'name' => $datos['name'],
                'lastname' => $datos['lastname'],
                'email' => $datos['email'],
                'password' => Hash::make($datos['passwordN'])
            ]);
        }else{
            DB::table('users')->where('id',auth() -> user() -> id)->update([
                'udg_code' => $datos['lastname'],
                'name' => $datos['name'],
                'lastname' => $datos['lastname'],
                'email' => $datos['email']
            ]);
        }
        return redirect('userProfile');
    }
    
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function show(Usuarios $usuarios)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function edit(Usuarios $usuarios)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Usuarios $usuarios)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function destroy(Usuarios $usuarios)
    {
        //
    }
}
