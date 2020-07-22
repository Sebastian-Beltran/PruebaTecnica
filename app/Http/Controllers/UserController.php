<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(User $user)
    {
        $users = User::orderBy('id', 'ASC')->paginate(5);

        // return $users;
        return view('users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'first_name' => 'required',
            'last_name' => 'required',
            'document' => 'required|unique:users',
            'email' => 'required|email|unique:users',
            'addres' => 'required',
            'phone' => 'required|unique:users',
            

        ];
        $this->validate($request, $rules);

        $campos = request()->except('_token');

        $users = User::create($campos);

        return redirect()->action('UserController@index')->with('msjc', 'Usuario creado.');;

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        if($request->has('first_name')){
            $user->first_name = $request->first_name;
        }
        if($request->has('last_name')){
            $user->last_name = $request->last_name;
        }
        if($request->has('document')){
            $user->document = $request->document;
        }
        if($request->has('email')){
            $user->email = $request->email;
        }
        if($request->has('addres')){
            $user->addres = $request->addres;
        }
        if($request->has('phone')){
            $user->phone = $request->phone;
        }

        $user->save();

        return redirect()->action('UserController@index')->with('msje', 'Usuario editado.');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::destroy($id);

       return redirect()->action('UserController@index')->with('msjd', 'Usuario eliminado.');;

    }
}
