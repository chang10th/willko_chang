@extends('adminlte::page')

@section('title', env('APP_NAME'))

@section('content_header')
    <h1 class="m-0 text-dark">Création d'un nouveau visiteur</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <form method="POST" action="{{route('visitor.storeVisitor')}}">
                @csrf
                <input type="hidden" name="role_id" value=""/>
                <div class="card card-primary card-outline">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">Nom</label>
                            <input type="text" class="form-control" name="lastname">
                        </div>
                        <div class="form-group">
                            <label for="name">Prénom</label>
                            <input type="text" required class="form-control" name="firstname">
                        </div>
                        <div class="form-group">
                            <label for="name">Email</label>
                            <input type="text" required class="form-control" name="email">
                        </div>
                        <div class="form-group">
                            <label for="name">Mot de passe</label>
                            <input type="password" required class="form-control" name="password">
                        </div>
                    </div>
                    <div class="card-footer">
                        <input type="submit" class="btn btn-primary float-right">
                    </div>
                </div>
            </form>
        </div>
    </div>
@stop