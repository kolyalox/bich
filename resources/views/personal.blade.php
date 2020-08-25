@extends('layouts.template')

@section('title')
    OFFICE
@endsection

@section('div')
    <div class="flex-center position-ref full-height">
@endsection

@section('content')
    @if(session('success'))
                <h1>{{session('success')}}</h1>
    @endif
@endsection
