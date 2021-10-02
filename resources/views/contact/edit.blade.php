@extends('layouts.app')

@section('content')
@include('flash::message')
@foreach ($errors->all() as $error)
<p style="color: rgb(192, 192, 9); font-size: 16px; text-align:center;" >{{ $error }}</p>
@endforeach
    <h1>Edit contact</h1>

    @include('contact.edit-form')
@endsection