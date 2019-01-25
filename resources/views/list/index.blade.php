@extends('layouts.layout')
@section('title', '一覧画面')
@section('content')
    @if(Auth::check())
        <div class="page-header main-header">
            <h1><small>{{$user->name}}さんの読書記録</small><a href="{{action('CreateController@index')}}" class="btn-new btn btn-success ">+ 本の新規登録</a></h1>
        </div>
    @endif
    <form action="" method="post" style="text-align: right;">
        {{csrf_field()}}
        <input type="text" name="keyword" value="{{$keyword}}" placeholder="category">
        <input type="submit" value="検索" class="btn btn-primary">
    </form>
    <table class="table">
        <thead>
        <tr>
            <th>題名</th>
            <th>カテゴリー</th>
            <th>ステータス</th>
        </tr>
        </thead>
        <tbody>
            @foreach($items as $item)
                <tr class="table-css">
                    <td>{{$item->getDataBook()}}</td>
                    <td>{{$item->getDataCategory()}}</td>
                    <td>{{$item->getDataIcon()}}</td>
                    <td >
                        <a href="{{action('DetailController@index', $item->getDataId())}}" class="btn btn-primary btn-sm">詳細</a>
                        <a href="{{action('UpdateController@index', $item->getDataId())}}" class="btn btn-primary btn-sm">編集</a>
                        <a href="{{action('DeleteController@index', $item->getDataId())}}" class="btn btn-danger btn-sm">削除</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection