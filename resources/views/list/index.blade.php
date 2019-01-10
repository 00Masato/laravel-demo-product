@extends('layouts.layout')
@section('title', 'Tutrial for beginner')
@section('content')
    @if(Auth::check())
        <div class="page-header" style="margin-top: -30px; padding-bottom: 0px;">
            <h1><small>{{$user->name}}さんの読書記録</small></h1>
        </div>
    @endif
    <a href="{{action('CreateController@index')}}" class="btn btn-success">新規登録</a>
    <form action="" method="post" style="text-align: right;">
        {{csrf_field()}}
        <input type="text" name="keyword" value="{{$keyword}}">
        <input type="submit" value="find" class="btn btn-default">
    </form>
    <table class="table table-striped table-hover">
        <thead>
        <tr>
            <th>No</th>
            <th>題名</th>
            <th>カテゴリー</th>
            <th>アイコン</th>
            <th>画像</th>
            <th>operation</th>
        </tr>
        </thead>
        <tbody>
            @foreach($items as $item)
                <tr>
                    <td>{{$item->getDataId()}}</td>
                    <td>{{$item->getDataBook()}}</td>
                    <td>{{$item->getDataCategory()}}</td>
                    <td>{{$item->getDataIcon()}}</td>
                    <td><img src="{{asset('/storage/book_images/' . $item->getDataImage())}}"></td>
                    <td>
                        <a href="{{action('DetailController@index', $item->getDataId())}}" class="btn btn-primary btn-sm">詳細</a>
                        <a href="{{action('UpdateController@index', $item->getDataId())}}" class="btn btn-primary btn-sm">編集</a>
                        <a href="{{action('DeleteController@index', $item->getDataId())}}" class="btn btn-danger btn-sm">削除</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection