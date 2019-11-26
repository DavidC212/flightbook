@extends('layouts.app')

{{-- @section('titre')
Vol
@endsection --}}

@section('content')
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                        {{$flight}}
                </div>
            </div>
        </div>
</div>
@endsection
