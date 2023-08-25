@extends('adminlte::page')

@section('title', env('APP_NAME'))

@section('content_header')
    <h1 class="m-0 text-dark">{{__('Dashboard')}}</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h3>Liste des visiteurs</h3>
                    <br/>
                    <table class="table table-bordered table-striped datatable">
                        <thead>
                        <tr>
                            <th>{{__('Nom')}}</th>
                            <th>{{__('Prénom')}}</th>
                            <th>{{__('Email')}}</th>
                        </tr>
                        </thead>
                        <tbody>
                    @foreach($visitors as $visitor)
                        <tr>
                            <td>
                                {{$visitor->lastname}}
                            </td>
                            <td>
                                {{$visitor->firstname}}
                            </td>
                            <td>
                                {{$visitor->email}}
                            </td>
                        </tr>
                    @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop

@section('js')
    @parent
    <script>
        $('.datatable').DataTable({
            language: {
                url: 'https://cdn.datatables.net/plug-ins/1.11.1/i18n/fr_fr.json'
            }
        });
    </script>
@endsection