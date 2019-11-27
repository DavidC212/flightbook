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

                    <div class="form-groupe">
                        <label for="date">Date</label>
                        <input class="form-control" type="date" name="date" id="date">
                    </div>

                    <div class="form-groupe">
                        <label for="glider_id"></label>
                        <select class="form-control custom-select" name="glider_id" id="glider_id">
                            @foreach ($gliders as $item)
                            <option value="{{$item->id}}">{{$item->type}} - {{$item->registration}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-groupe">
                        <label for="nature_id"></label>
                        <select class="form-control custom-select" name="nature_id" id="nature_id">
                            @foreach ($natures as $item)
                            <option value="{{$item->id}}">{{$item->nature}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-groupe">
                        <label for="board_function_id"></label>
                        <select class="form-control custom-select" name="board_function_id" id="board_function_id">
                            @foreach ($board_functions as $item)
                            <option value="{{$item->id}}">{{$item->board_function}}</option>
                            @endforeach
                        </select>
                    </div><br />

                    <div class="row">
                        <div class="col-4">
                            <div class="form-groupe">
                                <label for="double_control">Double commande</label>
                                <input class="form-control" type="text" name="double_control" id="double_control" value="00:00:00">
                            </div>
                        </div>

                        <div class="col-4">
                            <div class="form-groupe">
                                <label for="captain">Commandant de bord</label>
                                <input class="form-control" type="text" name="captain" id="captain" value="00:00:00">
                            </div>
                        </div>

                        <div class="col-4">
                            <div class="form-groupe">
                                <label for="instructor">Instructeur de vol</label>
                                <input class="form-control" type="text" name="instructor" id="instructor" value="00:00:00">
                            </div>
                        </div>
                    </div>


                    <br />
                    <input class="btn btn-primary" type="submit" value="Ajouter"/>

                </form>
                {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
            </div>
        </div>
    </div>

</div>
@endsection
