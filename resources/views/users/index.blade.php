@extends('layouts.app')

@section('content')
<div class="register"><a href="{{ route('register') }}">>> 登録</a></div>
<div class="CRUDTable">
    <table>
        <thead>
            <th>名前</th>
            <th>電話番号</th>
            <th>メールアドレス</th>
            <th></th>
        </thead>
        <tbody>
            @if (count($users) > 0)
            @foreach ($users as $user)
            <tr>
                <td class="table-name">
                    <div>{{ $user->name }}</div>
                </td>
                <td class="table-phone">
                    <div>{{ $user->phone}}</div>
                </td>
                <td class="table-mail">
                    <div>{{ $user->email }}</div>
                </td>
                <td class="table-name">
                    <div><a href="{{ route('moveedit', $user->id ) }}">>> 編集</a></div>
                </td>
            </tr>
            @endforeach
            @endif
        </tbody>
    </table>
</div>