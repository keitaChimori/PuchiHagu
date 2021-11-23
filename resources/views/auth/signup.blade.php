<!-- 会員登録ページ -->

<!-- layout.blade.php読み込み -->
@extends('layouts.layout')

<!-- ページタイトル -->
@section('title','会員登録 ｜ 幼児無料プリントサイト ぷちはぐ')

@section('content')

<!-- ログインorパスワードを忘れた方or新規登録 -->
<div id="contents" class="signup">
    <section class="box1">
        <h2>会員登録</h2>

        <p class="center">会員登録がおすみの方は<a href="{{ route('showLogin') }}">こちら</a>から</p>

        <form action="{{ route('exeSignup') }}" method="post" class="form">
            @csrf
            <div class="usernameWrapper">

                <!-- メッセージ -->
                @if(session('message'))
                    <p>{{ session('message') }}</p>
                @endif

                <label for="username"><strong>メールアドレス</strong></label>
                <input type="email" name="email" value="{{ old('email') }}" id="username" required>
                <!-- バリデーション -->
                @error('email')
                    <p class="text-danger">{{ $message }}</p>
                @enderror

                <div class="passwordWrapper">
                    <label for="password"><strong>ぱすわーど</strong></label>
                    <input type="password" name="password" value="{{ old('password') }}" id="password" required>
                    <!-- バリデーション -->
                    @error('password')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="passwordWrapper">
                    <label for="password"><strong>ぱすわーど【確認用】</strong></label>
                    <input type="password" name="password_confirmation" id="password" required>
                    <!-- バリデーション -->
                    @error('password_confirmation')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
            </div><!-- /.usernameWrapper -->
            <p style="text-align: center;"><a href="{{ route('showMembership') }}">会員規約</a></p>

            <!-- バリデーション -->
            <!-- メール送信の機能追加 -->
            <div class="btnWrapper">
                <input type="submit" name="" value="規約に同意して登録">
            </div>
        </form>
    </section>
</div><!-- /#contents -->
@endsection