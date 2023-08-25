<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class VisitorController extends Controller
{
    public function index()
    {
        // On retourne la vue visitor.index avec les données de tous users ayant le role "Visitor" stockée dans la variable nommée 
        // "visitors" qui pourra être réutiliser dans la vue.
        return view('visitor.index',['visitors'=>User::join('roles', 'roles.id', '=', 'users.role_id')->where('roles.roleName', "Visitor")->get()]);
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        // Pour update les données du visiteurs
    }

    public function delete($id)
    {
        // Pour supprimer un visiteur
    }

    public function createVisitor()
    {
        // Page formulaire permettant de créer un nouveau visiteur
        return view('visitor.createVisitor');
    }

    public function storeVisitor(Request $request)
    {
        // permet de créer un visiteur dans la bdd
        $data = [
            'lastname'=>$request->lastname,
            'firstname'=>$request->firstname,
            'role_id'=>(int)$request->role_id,
            'email'=>$request->email,
            'password'=>$request->password,
        ];

        User::factory()->create($data);

        return redirect(route('visitor.index'));
    }
}
