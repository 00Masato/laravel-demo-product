@extends('layouts.layout')
@section('title', 'Tutrial for beginner')
@section('content')
    @if(Auth::check())
        <div class="page-header" style="margin-top: -30px; padding-bottom: 0px;">
            <h1><small>{{$user->name}}さんの読書記録</small></h1>
        </div>
    @endif




@endsection