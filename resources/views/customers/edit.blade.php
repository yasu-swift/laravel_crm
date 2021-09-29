@extends('layouts.main')
@section('title', '編集画面')
@section('content')
    @if ($errors->any())
        <div class="error">
            <p>
                <b>{{ count($errors) }}件のエラーがあります。</b>
            </p>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <h1>編集画面</h1>
    <form action="{{ route('customers.update', $customer) }}" method="post">
        @csrf
        @method('patch')
        <div>
            <label for="name">名前</label>
            <input type="text" name="name" id="name" value="{{ old('name', $customer->name) }}">

        </div>
        <div>
            <label for="email">メールアドレス</label>
            <input type="text" name="email" id="email" value="{{ old('email', $customer->email) }}">

        </div>
        <div>
            <label for="zipcode">郵便番号</label>
            <input type="text" name="zipcode" id="zipcode" value="{{ old('zipcode', $customer->zipcode) }}">
        </div>
        <div>
            <label for="address">住所</label>
            <textarea name="address" id="address" cols="30" rows="10">{{ old('address', $customer->address) }}</textarea>
        </div>
        <div>
            <label for="phone">電話番号</label>
            <input type="text" name="phone" id="phone" value="{{ old('phone', $customer->phone) }}">
        </div>
        <div>
            <input type="submit" value="更新">
        </div>
    </form>
    <input type="button" onclick="location.href='{{ route('customers.index') }}'" value="戻る">
@endsection
