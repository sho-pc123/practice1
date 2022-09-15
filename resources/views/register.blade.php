@extends('layouts.app')

@section('content')
<div>
    <div>
        ようこそ
    </div>
    <div>新規登録用の情報入力</div>
    <form action="{{ route('register') }}" method="POST">
        @csrf
        <div>
            <div>姓</div>
            <input type="text" name="name_surneme" />
        </div>
        <div>
            <div>名</div>
            <input type="text" name="name_first" />
        </div>
        <div>
            <div>姓（フリガナ）</div>
            <input type="text" name="name_surneme_furigana" />
        </div>
        <div>
            <div>名（フリガナ）</div>
            <input type="text" name="name_first_furigana" />
        </div>
        <div>
            <div>性別</div>
            <input type="text" name="gender" />
        </div>
        <div>
            <div>生年月日</div>
            <input type="text" name="dirthday" />
        </div>
        <div>
            <div>郵便番号</div>
            <input type="text" name="post_code" />
        </div>
        <div>
            <div>都道府県</div>
            <input type="text" name="prefectures" />
        </div>
        <div>
            <div>市区町村</div>
            <input type="text" name="municipalities" />
        </div>
        <div>
            <div>番地</div>
            <input type="text" name="address" />
        </div>
        <div>
            <div>ビル・マンション名</div>
            <input type="text" name="building_name" />
        </div>
        <div>
        <div>電話番号</div>
            <input type="text" name="phone_number" />
        </div>
        <div>
            <div>メールアドレス</div>
            <input type="text" name="email" />
        </div>
            <div>パスワード</div>
        <div>
            <input type="text" name="password" />
        </div>
        <button type="submit">新規登録</button>
    </form>

</div>
@endsection