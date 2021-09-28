@extends('layouts.main')
@section('title', '顧客一覧')
@section('content')
    <h1>顧客一覧</h1>
    <table border="1">
        <tr>
            <th>顧客ID</th>
            <th>名前</th>
            <th>メールアドレス</th>
            <th>郵便番号</th>
            <th>住所</th>
            <th>電話番号</th>
        </tr>
        @foreach ($customers as $customer)
            <tr>
                <td><a href="/customers/{{ $customer->id }}">{{ $customer->id }}</a></td>
                <td>{{ $customer->name }}</td>
                <td>{{ $customer->email }}</td>
                <td>{{ $customer->zipcode }}</td>
                <td>{{ $customer->address }}</td>
                <td>{{ $customer->phone }}</td>
            </tr>
        @endforeach
    </table>

    <!-- 新規登録画面へジャンプする -->
    <input type="button" onclick="location.href='/customers/search'" value="新規作成">
@endsection
