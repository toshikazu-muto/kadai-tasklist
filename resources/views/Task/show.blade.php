@extends('layouts.app')

@section('content')

    <h1>id = {{ $tasks->id }} のメッセージ詳細ページ</h1>

    <table class="table table-bordered">
        <tr>
            <th>id</th>
            <td>{{ $tasks->id }}</td>
        </tr>
        <tr>
            <th>メッセージ</th>
            <td>{{ $taska->content }}</td>
        </tr>
    </table>
    
    {{-- メッセージ編集ページへのリンク --}}
    {!! link_to_route('taskss.edit', 'このメッセージを編集', ['tasks' => $tasks->id], ['class' => 'btn btn-light']) !!}
    
    {{-- メッセージ削除フォーム --}}
    {!! Form::model($tasks, ['route' => ['tasaks.destroy', $tasks->id], 'method' => 'delete']) !!}
        {!! Form::submit('削除', ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}

@endsection