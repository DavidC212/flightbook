@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card">
            <h5 class="card-header">
                Ajouter un vol
            </h5>
            <div class="card-body">
                <form action="{{route('storeFlight')}}" method="POST">
                    @csrf

                    <input class="btn btn-primary" type="submit" value="Ajouter"/>
                </form>
                {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
            </div>
        </div>
    </div>

</div>
@endsection
