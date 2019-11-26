@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


                <table class="flights-table">
                    <thead>
                        <tr>
                            <th>Date</th>
                            <th>Type</th>
                            <th>Immatriculation</th>
                            <th>Double contrôle</th>
                            <th>Capitaine</th>
                            <th>Instructeur</th>
                            <th>Fonction à bord</th>
                            <th>Nature du vol</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($flights as $flight)
                        <tr>
                            <td><a href={{route('show',['id' => $flight->id])}}>{{$flight->date}}</a></td>
                            <td>{{$flight->glider->type}}</td>
                            <td>{{$flight->glider->registration}}</td>
                            <td>{{$flight->double_control}}</td>
                            <td>{{$flight->captain}}</td>
                            <td>{{$flight->instructor}}</td>
                            <td>{{$flight->board_function->board_function_code}}</td>
                            <td>{{$flight->nature->nature_code}}</td>
                            <td><a href="#">Modifier</a></td>
                            <td><a href="#">Supprimer</a></td>
                        </tr>
                        <br />
                    @endforeach
                    </tbody>
                </table>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
