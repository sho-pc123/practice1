<!DOCTYPE html>
<html lang=“ja”>
 <head>
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="practice" content="practice">
  <meta charset="UTF-8">
  <title>practice1</title>
 </head>
 <body>
    <nav>
        @guest
            <a href="/login">ログイン</a>
            <a href="/register">新規登録</a>
        @else
            <a href="{{ route('logout') }}">ログアウト</a>
            <a href="{{ route('mypage') }}">mypage</a>
        @endguest
    </nav>
    <main>
        <div class="col-md-6 p-0">
            @yield('content')
        </div>
    </main>
 </body>
</html>