@extends('layouts.app')

@section('content')
<div>
    <div>
        ようこそ
    </div>
    <div>ログイン用の情報入力</div>
    <form action="{{ route('login') }}" method="POST">
        @csrf
        <div>
            <input type="text" name="email" />
        </div>
        <div>
            <input type="text" name="password" />
        </div>
        <button type="submit">ログイン</button>
    </form>
</div>
@endsection