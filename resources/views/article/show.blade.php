@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">
                {{ $article->title }}
            </div>
            <div class="panel-body">
                <pre>{{ $article->content }}</pre>
            </div>
            <div class="panel-footer">
                <button type="button" class="btn btn-danger btn-sm" onclick="js.article.destroy({{ $article->id }}, '{{ route('article.index') }}')">삭제</button>
                <a href="{{ route('article.edit', $article->id) }}" class="btn btn-primary btn-sm">수정</a>
                <a href="{{ route('article.index') }}" class="btn btn-default btn-sm">목록</a>
            </div>
        </div>
    </div>
@stop