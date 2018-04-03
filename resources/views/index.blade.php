@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">文章列表</div>

                <div class="panel-body">
                    <table style="width:100%">
                        <thead>
                            <tr>
                                <th style="text-align: center">分類</th>
                                <th style="text-align: center">標題</th>
                                <th style="text-align: center">作者</th>
                                <th style="text-align: center">內容</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($Posts as $Post)
                                <tr>
                                    <td style="padding: 10px;">{{ $Post->category->name }}</td>
                                    <td style="padding: 10px;">{{ $Post->title }}</td>
                                    <td style="padding: 10px;">{{ $Post->author->username }}</td>
                                    <td style="padding: 10px;">{{ $Post->content }}</td>
                                </tr>
                            @empty
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
