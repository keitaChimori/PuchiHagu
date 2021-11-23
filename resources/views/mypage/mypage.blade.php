<!-- マイページ -->

<!-- layout.blade.php読み込み -->
@extends('layouts.layout')

<!-- ページタイトル -->
@section('title','マイページ ｜ 幼児無料プリントサイト ぷちはぐ')

@section('content')

<div id="contents">

    <section class="box1">

        <h2>マイページ</h2>
        <div class="message-user">
            <p>こんにちは、
                @if(is_null(Auth::user()->parent_name))
                    〇〇
                @else
                    {{Auth::user()->parent_name}}
                @endif
                さん
            </p>
        </div>

        <!-- メッセージ表示 -->
        @if(session('message'))
            <p class="text-center text-success ">{{ session('message') }}</p>
        @endif

        <!-- タブ部分 -->

        <!-- こども１ -->
        <div class="tab-wrap">
            <input id="tab01" type="radio" name="tab" class="tab-switch" checked="checked">
            <label class="tab-label" for="tab01">
                <img src="{{ asset('images/mypage_pen_icon.png') }}">
                <!-- 名前 -->
                @if(is_null( $children_data[0]['child_name'] ))
                    おなまえ
                @else
                    {{ $children_data[0]['child_name'] }}
                @endif
            </label>
            <div class="tab-content">
                <div class="fancy-button">
                    <div class="left-frills frills"></div>
                    <div class="button">
                        <p>
                            <a href="{{ route('showStamp',0) }}"><img src="{{ asset('images/mypage_note_icon.png') }}">すたんぷちょう</a>
                        </p>
                    </div>
                    <div class="right-frills frills"></div>
                </div>
                <table cellpadding="0" cellspacing="10" align="center">
                    <tbody>
                        <tr>
                            <td>
                                <img src="{{ asset('images/hiragana.png') }}" alt="ひらがなプリント" width="300" height="">
                            </td>
                            <td>
                                <a href="{{ route('showHiragana',$children_data[0]['id']) }}" class="btn btn-malformation1">「ひらがな」を印刷</a>
                            </td>
                            <td>
                                <img src="{{ asset('images/suzi.png') }}" alt="すうじプリント" width="300" height=""></p>
                            </td>
                            <td>
                                <a href="{{ route('showSuzi',$children_data[0]['id']) }}" class="btn btn-malformation2">「すうじ」を印刷</a>
                            </td>
                        </tr>
                    </tbody>
                </table>

                <table cellpadding="0" cellspacing="30" align="center">
                    <tbody>
                        <tr>
                            <td>
                                <img src="{{ asset('images/unpitsu.png') }}" alt="ひらがなプリント" width="300" height="">
                            </td>
                            <td>
                                <a href="{{ route('showUnpitu',$children_data[0]['id']) }}" class="btn btn-malformation3">「うんぴつ」を<br>印刷</a>
                            </td>
                            <td>
                                <img src="{{ asset('images/tentunagi.png') }}" alt="すうじプリント" width="300" height=""></p>
                            </td>
                            <td>
                                <a href="{{ route('showTentunagi',$children_data[0]['id']) }}" class="btn btn-malformation4">「てんつなぎ」を<br>印刷</a>
                            </td>
                        </tr>
                    </tbody>
                </table>

                <table cellpadding="0" cellspacing="20" align="center">
                    <tbody>
                        <tr>
                            <td>
                                <img src="{{ asset('images/programming.png') }}" alt="ひらがなプリント" width="300" height="">
                            </td>
                            <td>
                                <a href="{{ route('showProgramming',$children_data[0]['id']) }}" class="btn btn-malformation5">「プログラミング」を印刷</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- こども２ -->
            <input id="tab02" type="radio" name="tab" class="tab-switch"><label class="tab-label" for="tab02">
                <img src="{{ asset('images/mypage_pen_icon.png') }}">
                <!-- 名前 -->
                @if(is_null( $children_data[1]['child_name'] ))
                    おなまえ
                @else
                    {{ $children_data[1]['child_name'] }}
                @endif
            </label>
            <div class="tab-content">
                <div class="fancy-button">
                    <div class="left-frills frills"></div>
                    <div class="button">
                        <p>
                            <a href="{{ route('showStamp',1) }}"><img src="{{ asset('images/mypage_note_icon.png') }}"> すたんぷちょう</a>
                        </p>
                    </div>
                    <div class="right-frills frills"></div>
                </div>

                <table cellpadding="0" cellspacing="10" align="center">
                    <tbody>
                        <tr>
                            <td>
                                <img src="{{ asset('images/hiragana.png') }}" alt="ひらがなプリント" width="300" height="">
                            </td>
                            <td>
                                <a href="{{ route('showHiragana',$children_data[1]['id']) }}" class="btn btn-malformation1">「ひらがな」を印刷</a>
                            </td>
                            <td>
                                <img src="{{ asset('images/suzi.png') }}" alt="すうじプリント" width="300" height=""></p>
                            </td>
                            <td>
                                <a href="{{ route('showSuzi',$children_data[1]['id']) }}" class="btn btn-malformation2">「すうじ」を印刷</a>
                            </td>
                        </tr>
                    </tbody>
                </table>

                <table cellpadding="0" cellspacing="30" align="center">
                    <tbody>
                        <tr>
                            <td>
                                <img src="{{ asset('images/unpitsu.png') }}" alt="ひらがなプリント" width="300" height="">
                            </td>
                            <td>
                                <a href="{{ route('showUnpitu',$children_data[1]['id']) }}" class="btn btn-malformation3">「うんぴつ」を<br>印刷</a>
                            </td>
                            <td>
                                <img src="{{ asset('images/tentunagi.png') }}" alt="すうじプリント" width="300" height=""></p>
                            </td>
                            <td>
                                <a href="{{ route('showTentunagi',$children_data[1]['id']) }}" class="btn btn-malformation4">「てんつなぎ」を<br>印刷</a>
                            </td>
                        </tr>
                    </tbody>
                </table>

                <table cellpadding="0" cellspacing="20" align="center">
                    <tbody>
                        <tr>
                            <td>
                                <img src="{{ asset('images/programming.png') }}" alt="ひらがなプリント" width="300" height="">
                            </td>
                            <td>
                                <a href="{{ route('showProgramming',$children_data[1]['id']) }}" class="btn btn-malformation5">「プログラミング」を印刷</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- 会員情報変更・ログアウト -->
            <input id="tab03" type="radio" name="tab" class="tab-switch"><label class="tab-label" for="tab03"><img src="{{ asset('images/mypage_settei_icon.png') }}"> 会員情報 / ログアウト</label>
            <div class="tab-content">
                <section class="member">
                    <h3 class="mypage-read">会員情報/ログアウト</h3>
                    <ul>
                        <li>
                            <a href="{{ route('showProfile') }}" class="btn btn-orange"><img src="{{ asset('images/mypage_touroku_icon.png') }}">
                                <br>
                                <br>会員情報の変更</a>
                        </li>
                        <li>
                            <a href="{{ route('showPasswordChange') }}" class="btn btn-orange"><img src="{{ asset('images/mypage_password_icon.png') }}">
                                <br>
                                <br>パスワードの変更</a>
                        </li>
                        <li>
                            <a href="{{ route('showDelete') }}" class="btn btn-orange"><img src="{{ asset('images/mypage_taikai_icon.png') }}">
                                <br><br>退会
                            </a>
                        </li>
                        <li>
                            <form action="{{ route('exeLogout') }}" method="POST">
                                @csrf
                                <button class="btn btn-orange"><img src="{{ asset('images/mypage_logout_icon.png') }}">
                                    <br><br>ログアウト
                                </button>
                            </form>
                        </li>
                    </ul>
                </section>

            </div>

        </div>
    </section>
</div><!--/#contents-->
@endsection