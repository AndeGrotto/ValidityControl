<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    public function list(Request $filtro) {
        $filtragem = $filtro->get('desc_filtro');
        if ($filtragem == null)
            $users = User::orderBy('id')->paginate(5);
        else
            $users = User::where('name','like', '%'.$filtragem.'%')
                                    ->orderBy("id")
                                    ->paginate(5)
                                    ->setpath('users?desc_filtro='.$filtragem);
 
        return view('users.list', ['users'=>$users]);
    }

    public function create() {
        return view('users.create');
    }

    public function store(UserRequest $request) {
        $novo_usuario = $request->all();
        $novo_usuario['password'] = Hash::make($novo_usuario['password']);
        User::create($novo_usuario);

        return redirect()->route('users');
    }

    public function destroy($id) {
        try{    
            User::find($id)->delete();
            $ret = array('status'=>200, 'msg'=>"null");
        }catch(\Illuminate\Database\QueryException $e){
            $ret = array('status'=>500, 'msg'=>$e->getMessage());
        }
        catch (\PDOException $e){
            $ret = array('status'=>500, 'msg'=>$e->getMessage());
        }
        return $ret;
    }

    public function edit($id) {
        $user = User::find($id);
        return view('users.edit', compact('user'));
    }

    public function update(UserRequest $request, $id) {
        User::find($id)->update($request->all());
        return redirect()->route('users');
    }
}
