@extends('layouts.app')

{{-- @section('titre')
Vol
@endsection --}}

@section('content')
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @isset($flight)
                <div class="card">
                        {{-- {{$flight}} --}}
                    <div class="card-header">
                        <b>Vol du {{$flight->date}}</b>
                    </div>
                    <div class="card-body">
                    <h5 class="card-title">{{$flight->board_function->board_function}} ({{$flight->user->name}})</h5>
                    <p class="card-text">Appareil :<br/>Type : {{$flight->glider->type}} - Immatriculation : {{$flight->glider->registration}}</p>
                    <p class="card-text">Nature du vol : {{$flight->nature->nature}}</p>
                    <p class="card-text">
                        @if ($flight->double_control !== '00:00:00')
                        Vol en double contrôle :
                        {{$flight->double_control}}
                        @endif
                        @if ($flight->captain !== '00:00:00')
                        Vol en tant que capitaine :
                        {{$flight->captain}}
                        @endif
                        @if ($flight->instructor !== '00:00:00')
                        Vol en tant qu'instructeur :
                        {{$flight->instructor}}
                        @endif
                    </p>
                    <a href="{{route('home')}}" class="btn btn-primary">Retourner au carnet</a>
                    </div>
                </div>
                @endisset

                @isset($nope)
                <div class="card" style="width: 100%;">
                    <a href="{{route('home')}}"><img src="{{ asset('css/nope.jpg') }}" class="card-img-top" alt="..."></a>
                    <div class="card-body">
                        <h5 class="card-title">{{$nope}}</h5>
                        <p class="card-text"></p>
                        <a href="{{route('home')}}" class="btn btn-primary">Retourner au carnet</a>
                    </div>
                </div>
                @endisset

                @isset($erreur)
                <div class="card" style="width: 100%;">
                    <a href="{{route('home')}}"><img src="{{ asset('css/404.gif') }}" class="card-img-top" alt="..."></a>
                    <div class="card-body">
                        <h5 class="card-title">{{$erreur}}</h5>
                        <p class="card-text"></p>
                        <a href="{{route('home')}}" class="btn btn-primary">Retourner au carnet</a>
                    </div>
                </div>
                @endisset
            </div>
        </div>
</div>
@endsection
