@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card">
            <h5 class="card-header">
                @if (isset($flight))
                Modifier un vol
                @else
                Ajouter un vol
                @endif
            </h5>
            <div class="card-body">
                <form action="@isset($flight){{route('updateFlight', $flight->id)}}@else{{route('storeFlight')}}@endisset" method="POST">
                    @csrf
                    @isset($flight) @method('PUT') @endisset
                    <div class="form-groupe">
                        <label for="date">Date</label>
                    <input class="form-control @error('date') is-invalid @enderror" type="date" name="date" id="date" value="@isset($flight){{$flight->date}}@else{{old('date')}}@endisset">
                        @error('date')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>

                    <div class="form-groupe">
                        <label for="glider_id"></label>
                        <select class="form-control custom-select @error('glider_id') is-invalid @enderror" name="glider_id" id="glider_id">
                            <option>Sélectionnez un planeur</option>
                            @foreach ($gliders as $item)
                                @isset($flight)
                                <option value="{{$item->id}}" {{$flight->glider_id==$item->id ? "selected":""}}>{{$item->type}} - {{$item->registration}}</option>
                                @else
                                <option value="{{$item->id}}" {{old('item_id')==$item->id ? "selected":""}}>{{$item->type}} - {{$item->registration}}</option>
                                @endisset
                            @endforeach

                        </select>
                        @error('glider_id')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>

                    <div class="form-groupe">
                        <label for="nature_id"></label>
                        <select class="form-control custom-select @error('nature_id') is-invalid @enderror" name="nature_id" id="nature_id">
                            <option>Sélectionnez la nature du vol</option>
                            @foreach ($natures as $item)
                                @isset($flight)
                                <option value="{{$item->id}}" {{$flight->nature_id==$item->id ? "selected":""}}>{{$item->nature}}</option>
                                @else
                                <option value="{{$item->id}}" {{old('item_id')==$item->id ? "selected":""}}>{{$item->nature}}</option>
                                @endisset
                            @endforeach
                        </select>
                        @error('nature_id')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>

                    <div class="form-groupe">
                        <label for="board_function_id"></label>
                        <select class="form-control custom-select @error('board_function_id') is-invalid @enderror" name="board_function_id" id="board_function_id">
                            <option>Sélectionnez une fonction à bord</option>
                            @foreach ($board_functions as $item)
                                @isset($flight)
                                <option value="{{$item->id}}" {{$flight->board_function_id==$item->id ? "selected":""}}>{{$item->board_function}}</option>
                                @else
                                <option value="{{$item->id}}" {{old('item_id')==$item->id ? "selected":""}}>{{$item->board_function}}</option>
                                @endisset
                            @endforeach
                        </select>
                        @error('board_function_id')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div><br />

                    <div class="row">
                        <div class="col-4">
                            <div class="form-groupe">
                                <label for="double_control">Double commande</label>
                                <input class="form-control @error('double_control') is-invalid @enderror" type="text" name="double_control" id="double_control" value="@isset($flight){{$flight->double_control}}@else 00:00:00 @endisset">
                                @error('double_control')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-4">
                            <div class="form-groupe">
                                <label for="captain">Commandant de bord</label>
                                <input class="form-control @error('captain') is-invalid @enderror" type="text" name="captain" id="captain" value="@isset($flight){{$flight->captain}}@else 00:00:00 @endisset">
                                @error('captain')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-4">
                            <div class="form-groupe">
                                <label for="instructor">Instructeur de vol</label>
                                <input class="form-control @error('instructor') is-invalid @enderror" type="text" name="instructor" id="instructor" value="@isset($flight){{$flight->instructor}}@else 00:00:00 @endisset">
                                @error('instructor')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                        </div>
                    </div>


                    <br />
                    <input class="btn btn-primary" type="submit" value="@isset($flight)Modifier @else Ajouter @endisset"/>
                    <a href="{{route('home')}}" class="btn btn-primary">Retourner au carnet</a>

                </form>

            </div>
        </div>
    </div>

</div>
@endsection
