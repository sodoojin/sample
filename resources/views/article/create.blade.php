@extends('layouts.app')

@section('content')
    <div class="container">
        <h4>생성 화면</h4>
        <br />
        <form action="{{ route('article.store') }}" method="post">
            @include('article.form')
        </form>
    </div>
@stop