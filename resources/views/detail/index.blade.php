@extends('layouts.layout')
@section('title', '詳細画面')
@section('content')
    @if(Auth::check())
        <div class="page-header main-header">
            <h1><small>{{$user->name}}さんの読書記録</small></h1>
        </div>
    @endif

    <h1>{{$item->book}}</h1>
    <hr class="featurette-divider">
    <div class="row featurette">
        <div class="col-md-6 detail-container">

            <h2 class="featurette-heading">&#12298;カテゴリー&#12299;</h2>
            <p class="lead">&emsp;&emsp;{{$item->category}}</p>

            <h2 class="featurette-heading">&#12298;ページ数&#12299;</h2>
            <p class="lead">&emsp;&emsp;{{$item->pageNumber}}</p>

            <h2 class="featurette-heading">&#12298;状態&#12299;</h2>
            <p class="lead">&emsp;&emsp;{{$item->icon}}</p>

            <h2 class="featurette-heading">&#12298;レビュー&#12299;</h2>
            <p class="lead">&emsp;&emsp;{{$item->review}}</p>

            <a href="{{action('UpdateController@index', $item->id)}}" class="btn btn-primary btn-sm">編集</a>
            <a href="{{action('ListController@index')}}" class="btn btn-success">戻る</a>



        </div>
        <div class="col-md-5">
            <img class="featurette-image img-fluid mx-auto" src='{{$image}}' class="img-thumbnail">
        </div>
    </div>
@endsection