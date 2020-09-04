@extends('layouts.helloapp')
<style>
  .pagination {
    font-size: 10pt;
  }

  .pagination li {
    display: inline-block
  }

  tr th a:link {
    color: white;
  }

  tr th a:visited {
    color: white;
  }

  tr th a:hover {
    color: white;
  }

  tr th a:active {
    color: white;
  }
</style>
@section('title', 'Index')

@section('menubar')
@parent
  インデックスページ
@endsection

@if (Auth::check())
  <p>USER: {{$user->name . ' (' . $user->email . ')'}}</p>
@else
  <p>※ログインしていません。（<a href="/login">ログイン</a>｜<a href="/register">登録</a>）</p>
@endif

@section('footer')
  copyright 2020 tuyano.
@endsection