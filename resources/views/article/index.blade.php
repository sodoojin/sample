@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="text-right">
            <a href="{{ route('article.create') }}" class="btn btn-primary btn-sm">추가</a>
        </div>
        <div class="row">
            <table class="table table-striped">
                <colgroup>
                    <col width="50" />
                    <col width="120" />
                    <col width="*" />
                    <col width="200" />
                    <col width="120" />
                </colgroup>
                <thead>
                <tr>
                    <th>#</th>
                    <th>타이틀</th>
                    <th>내용</th>
                    <th>작성자</th>
                    <th>명령</th>
                </tr>
                </thead>
                <tbody>
                @foreach($articles as $article)
                    <tr>
                        <td></td>
                        <td>{{ $article->title }}</td>
                        <td>{{ $article->content }}</td>
                        <td>{{ $article->user->email }}</td>
                        <td>
                            <a href="javascript:js.article.destroy({{ $article->id }})">삭제</a> |
                            <a href="{{ route('article.show', $article->id) }}">확인</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop