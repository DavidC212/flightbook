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
                </div>

                <div class="col-md-12" style="margin-bottom:15px">
                    <a href="{{route('createFlight')}}" class="btn btn-primary">Ajouter un vol</a>
                </div>

                <table class="table table-striped{{--  flights-table --}}">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Date</th>
                            <th scope="col">Type</th>
                            <th scope="col">Immatriculation</th>
                            <th scope="col">Double contrôle</th>
                            <th scope="col">Capitaine</th>
                            <th scope="col">Instructeur</th>
                            <th scope="col">Fonction à bord</th>
                            <th scope="col">Nature du vol</th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                    @php
                        $total_dc=0;
                        $total_cpt=0;
                        $total_iv=0;
                    @endphp
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
                    @php
                        $total_dc+=strtotime($flight->double_control);
                        $total_cpt+=strtotime($flight->captain);
                        $total_iv+=strtotime($flight->instructor);
                    @endphp
                    @endforeach

                    @php
                        $total=$total_dc+$total_cpt+$total_iv;
                        $total_dc=date("H:i:s",$total_dc);
                        $total_cpt=date("H:i:s",$total_cpt);
                        $total_iv=date("H:i:s",$total_iv);
                        $total=date("H:i:s",$total);
                    @endphp
                    </tbody>
                </table>

                <div class="container">
                    <div class="row justify-content-end">
                        <div class="card" style="width: 350px; margin:20px;">
                            <h5 class="card-header">Total heures de vol</h5>
                            <div class="card-body">
                                @if ($total_dc!=='00:00:00')
                                <p class="card-text">Double contrôle : {{$total_dc}}</p>
                                @endif
                                @if ($total_cpt!=='00:00:00')
                                <p class="card-text">Capitaine : {{$total_cpt}}</p>
                                @endif
                                @if ($total_iv!=='00:00:00')
                                <p class="card-text">Instructeur de vol : {{$total_iv}}</p>
                                @endif

                                <h5 class="card-title">Total heures</h5>
                                <p class="card-text">{{$total}}</p>

                                {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>
@endsection
