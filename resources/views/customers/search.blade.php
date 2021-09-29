@extends('layouts.main')
@section('title', '郵便番号検索画面')
@section('content')
    @if (!empty($errors))
        <div class="error">
            @foreach ($errors->all() as $error)
                {{ $error }}
            @endforeach
        </div>
    @endif
    <h1>郵便番号検索画面</h1>
    <form action="{{ route('customers.create') }}" method="GET">
        @csrf
        <div>
            <label for="zipcode">郵便番号検索</label>
            <input type="text" name="zipcode" id="zipcode" placeholder="検索したい郵便番号">
            <input type="submit" value="検索">
        </div>
    </form>
    <button type="button" onclick="location.href='{{ route('customers.index') }}'">一覧へ戻る</button>
@endsection
