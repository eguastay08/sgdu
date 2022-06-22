<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $users=User::all();
         foreach ($users as $user){
              $user['roles']=$user->getRoleNames();
         }

         return view('users/users', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles=Role::get();
        $user=null;
        return view('users/create',compact('roles','user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      //  'email' => ['required', 'email', 'max:50', Rule::unique('users')->ignore(Auth::user()->id)],
        $messages = [
            'required'  => 'El campo :attribute es requerido.',
            'unique'    => ':attribute ya existe',
            'exists'=>':attribute no existe',
        ];

        $data=[];
        $edit_permission=[
            'name',
            'email',
            'password',
            'phone',
            'location',
            'role',
        ];

        foreach ($edit_permission as $d){
            if(isset($request->$d)){
                $data[$d]=$request->$d;
            }
        }

        request()->validate([
            'name' => ['required', 'max:50'],
            'email' => ['required', 'email', 'max:50', Rule::unique('users')],
            'password'     => ['required','max:50'],
            'phone'     => ['required','max:50'],
            'location' => ['required','max:70'],
            'role'    => 'exists:roles,name|required',
        ],$messages);

        $data['password']=Hash::make($data['password']);

        if($user=User::create($data)){
            $user->assignRole($data['role']);
            session()->flash('success', 'Se registro con exito');
            return redirect()->route('users.index');
        }else{
            return redirect()->route('users.create')->with(['status' => 'error', 'color' => 'red', 'message'=>"Ocurrio un error!!"]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user=User::findOrFail($id);
        $roles=Role::get();
        $role=$user->getRoleNames();
        $user['role']=$role[0];
        return view('users/create',compact('roles','user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user=User::findOrFail($id);

        $messages = [
            'required'  => 'El campo :attribute es requerido.',
            'unique'    => ':attribute ya existe',
            'exists'=>':attribute no existe',
        ];

        $data=[];
        $edit_permission=[
            'name',
            'email',
            'password',
            'phone',
            'location',
            'role',
        ];

        foreach ($edit_permission as $d){
            if(isset($request->$d)){
                $data[$d]=$request->$d;
            }
        }

       /* request()->validate([
            'name' => ['required', 'max:50'],
            'email' => ['required', 'email', 'max:50', Rule::unique('users')->ignore(Auth::user()->id)],
            'password'     => ['max:50'],
            'phone'     => ['required','max:50'],
            'location' => ['required','max:70'],
            'role'    => 'exists:roles,name|required',
        ],$messages);*/
        if(isset($data['password'])){
            $data['password']=Hash::make($data['password']);
        }else{
            unset($data['password']);
        }

        if($user->update($data)){
            $user->assignRole($data['role']);
            session()->flash('success', 'Se actualizo con exito');
            return redirect()->route('users.index');
        }else{
            return redirect()->route('users.create')->with(['status' => 'error', 'color' => 'red', 'message'=>"Ocurrio un error!!"]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect('/users')->with('success', 'Se elimino correctamente');
    }
}
