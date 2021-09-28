@extends('layouts.main')
@section('title', '顧客詳細画面')
@section('content')
    <h1>顧客詳細画面</h1>
    <table border="1">
        <tr>
            <th>顧客ID</th>
            <th>名前</th>
            <th>メールアドレス</th>
            <th>郵便番号</th>
            <th>住所</th>
            <th>電話番号</th>
        </tr>
        <tr>
            <td><a href="/customers/{{ $customer->id }}">{{ $customer->id }}</a></td>
            <td>{{ $customer->name }}</td>
            <td>{{ $customer->email }}</td>
            <td>{{ $customer->zipcode }}</td>
            <td>{{ $customer->address }}</td>
            <td>{{ $customer->phone }}</td>
        </tr>
    </table>
    <div class="button">
        <input type="button" value="編集画面" onclick="location.href='/customers/{{ $customer->id }}/edit'">
        <form action="{{ route('customers.destroy', $customer) }}" method="post" name="form1" style="display: inline">
            @csrf
            @method('delete')
            <button type="submit" onclick="if(!confirm('削除していいですか?')){return false}">削除する</button>
        </form>
        <input type="button" onclick="location.href='/customers'" value="一覧に戻る">
    </div>
@endsection
