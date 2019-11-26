@extends('template')

@section('titre')
Le titre de ma vue
@endsection

@section('contenu')
Il s'agit de la page {{$numero ?? '' }} !!!
@endsection
