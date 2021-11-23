<!-- パスワード変更画面 -->

<!-- layout.blade.php読み込み -->
@extends('layouts.layout')

<!-- ページタイトル -->
@section('title','パスワード変更 ｜ 幼児無料プリントサイト ぷちはぐ')

@section('content')

<div id="contents">
    <section class="box1">

        <h1 class="contCaption">PASSWORD</h1>
        <h2 class="contSubCaption">パスワードの変更</h2>
        <div class="message-user-kaiin">
            <p>パスワードの変更を行います。<br>各項目の入力が完了したら「変更する」ボタンを押して完了ページへお進みください。</p>
        </div>

        <!-- エラーメッセージ -->
        @if(session('message'))
            <p class="text-danger">{{ session('message') }}</p>
        @endif

        <form action="{{ route('exePasswordChange') }}" method="POST">
            @csrf
            <div class="form-group row form-inline justify-content-center">
                <label for="oldpassword" class="col-sm-2 col-form-label">現在のパスワード</label>
                <div class="col-xs-2">
                    <input type="password" name="oldpassword" class="form-control" id="oldpassword">
                    <!-- バリデーションエラー -->
                    @error('oldpassword')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div class="form-group row form-inline justify-content-center">
                <label for="password" class="col-sm-2 col-form-label">新しいパスワード</label>
                <div class="col-xs-3">
                    <input type="password" name="password" class="form-control" id="password">
                    <small id="passwordHelp" class="form-text text-muted">半角英数字のみ6文字以上で入力ください</small>
                    <!-- バリデーションエラー -->
                    @error('password')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div class="form-group row form-inline justify-content-center">
                <label for="password_confirmation" class="col-sm-2 col-form-label">新しいパスワード【確認用】</label>
                <div class="col-xs-3">
                    <input type="password" name="password_confirmation" class="form-control" id="password_confirmation">
                    <!-- バリデーションエラー -->
                    @error('password_confirmation')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div class="container">
                <input type="submit" class="add-submit" value="変更する"><br>
            </div>
            <div class="container ">
                <a href="{{ route('showMypage') }}" class="reset-submit">戻る</a><br>
            </div>
        </form>

    </section>
</div><!--/#contents-->
@endsection