@extends('layouts.app')
@section('content')
    <h1>{{__("messages.welcome", ["name" => "pippo"])}}</h1>
    <p>{{trans_choice("messages.age",1 ,["ages" => 1])}}</p>
@endsection
