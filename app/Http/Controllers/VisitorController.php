<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class VisitorController extends Controller
{
    public function index()
    {
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

    public function storeVisit(Request $request)
    {
        // permet de créer un visiteur dans la bdd
    }
}
