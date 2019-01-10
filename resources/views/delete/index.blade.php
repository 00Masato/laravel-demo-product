@extends('layouts.layout')
@section('title', 'Tutrial for beginner')
@section('content')
    @if(Auth::check())
        <div class="page-header" style="margin-top: -30px; padding-bottom: 0px;">
            <h1><small>{{$user->name}}さんの読書記録</small></h1>
        </div>
    @endif

    <form action="/delete/{{$item->id}}" method="post">

        {{csrf_field()}}

        <input type="hidden" name="id" value="{{$item->id}}">

        <h1>{{$item->book}}</h1>
        <hr class="featurette-divider">
        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading">&#12298;カテゴリー&#12299;</h2>
                <p class="lead">&emsp;&emsp;{{$item->category}}</p>

                <h2 class="featurette-heading">&#12298;ページ数&#12299;</h2>
                <p class="lead">&emsp;&emsp;{{$item->pageNumber}}</p>

                <h2 class="featurette-heading">&#12298;状態&#12299;</h2>
                <p class="lead">&emsp;&emsp;{{$item->icon}}</p>

                <h2 class="featurette-heading">&#12298;レビュー&#12299;</h2>
                <p class="lead">&emsp;&emsp;{{$item->review}}</p>

                <input type="submit" value="削除" class="btn btn-danger btn-sm">
                <a href="{{action('ListController@index')}}" class="btn btn-success">戻る</a>


            </div>
            <div class="col-md-5">
                <img class="featurette-image img-fluid mx-auto" src="{{asset('/storage/book_images/' . $item->image)}}" class="img-thumbnail">
            </div>
        </div>

    </form>







@endsection