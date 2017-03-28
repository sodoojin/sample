@extends('layouts.app')

@section('content')
    <div class="container">
        <h4>수정 화면</h4>
        <br />
        <form action="{{ route('article.update', $article->id) }}" method="post">
            <input type="hidden" name="_method" value="put">
            @include('article.form', ['article' => $article])
        </form>
    </div>
@stop