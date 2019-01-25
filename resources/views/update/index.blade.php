@extends('layouts.layout')
@section('title', '編集画面')
@section('content')
    @if(Auth::check())
        <div class="page-header main-header">
            <h1><small>{{$user->name}}さんの読書記録</small></h1>
        </div>
    @endif

    <h2>編集</h2>

    <form action="/update/{{$item->id}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}

        <input type="hidden" name="id" value="{{$item->id}}">

        <div class="form-group">
            <label class="control-label">題名</label>
            <input class="form-control" type="text" name="book" value="{{$item->book}}">
        </div>
        @if($errors->has('book'))
            <span class="text-danger">
                {{$errors->first('book')}}
            </span>
        @endif

        <div class="form-group">
            <label class="control-label">カテゴリー</label>
            <input class="form-control" type="text" name="category" value="{{$item->category}}">
        </div>
        @if($errors->has('category'))
            <span class="text-danger">
                {{$errors->first('category')}}
            </span>
        @endif

        <div class="form-group">
            <label class="control-label">ページ数</label>
            <input class="form-control" type="number" name="pageNumber" value="{{$item->pageNumber}}">
        </div>
        @if($errors->has('pageNumber'))
            <span class="text-danger">
                {{$errors->first('pageNumber')}}
            </span>
        @endif

        <div class="form-group">
            <label class="control-label">状態</label>
            <div class="radio">
                <label><input type="radio" name="icon" value="read" @if($item->icon == 'read') checked="checked" @endif >read</label>
                <label><input type="radio" name="icon" value="reading" @if($item->icon == 'reading') checked="checked" @endif >reading</label>
            </div>
        </div>
        @if($errors->has('icon'))
            <span class="text-danger">
                {{$errors->first('icon')}}
            </span>
        @endif

        <div class="form-group">
            <label class="control-label">画像</label>
            <input id="file" type="file" name="image" value="">
        </div>
        @if($errors->has('image'))
            <span class="text-danger">
                {{$errors->first('image')}}
            </span>
        @endif

        <div class="form-group">
            <label class="control-label">レビュー</label>
            <textarea class="form-control" name="review" cols="30" rows="5" >{{$item->review}}</textarea>
        </div>
        @if($errors->has('review'))
            <p class="text-danger">
                {{$errors->first('review')}}
            </p>
        @endif

        <input class="btn btn-primary" type="submit" value="アップロード">
        <a href="{{action('ListController@index')}}" class="btn btn-success">戻る</a>

    </form>







@endsection