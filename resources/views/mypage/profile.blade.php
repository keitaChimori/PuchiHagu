<!-- 会員情報変更(プロフィール)画面 -->

<!-- layout.blade.php読み込み -->
@extends('layouts.layout')

<!-- ページタイトル -->
@section('title','会員情報の変更｜ 幼児無料プリントサイト ぷちはぐ')

@section('content')

<div id="contents">

    <section class="box1">

        <h1 class="contCaption">MY DATA UPDATE</h1>
        <h2 class="contSubCaption">会員情報の変更</h2>
        <div class="message-user-kaiin">
            <p>会員情報の変更を行います。<br>各項目の入力・変更が完了いたしましたら、「確認する」ボタンを押してください。
            </p>
        </div>

        <div class="sectionHeader">
            <h2>基本情報</h2>
        </div>

        <!-- 会員情報変更完了メッセージ -->
        @if(session('message'))
        <p class="text-center">{{ session('message') }}</p>
        @endif

        <form action="{{ route('exeProfile') }}" method="post">
            @csrf

            <!-- ユーザー(保護者)名 -->
            <div class="form-group row form-inline justify-content-center">
                <label for="user_name" class="col-sm-2 col-form-label font-weight-bold">ユーザー名<br>(保護者のお名前)</label>
                <div class="col-xs-2">
                    <input type="text" name="user_name" id="user_name" class="form-control" value="{{ old('user_name',Auth::user()->parent_name) }}">
                    <!-- バリデーションエラー -->
                    @error('user_name')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <!-- メールアドレス -->
            <div class="form-group row form-inline justify-content-center">
                <label for="email" class="col-sm-2 col-form-label font-weight-bold">メールアドレス</label>
                <div class="col-xs-2">
                    <input type="email" name="email" id="email" class="form-control" value="{{ old('email',Auth::user()->email) }}">
                    <!-- バリデーションエラー -->
                    @error('email')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <!-- 子ども１人目の名前 -->
            <div class="form-group row form-inline justify-content-center">
                <label for="childname1" class="col-sm-2 col-form-label font-weight-bold">お子さま1人目のお名前</label>
                <div class="col-xs-2">
                    <input type="text" id="childname1" name="childname1" class="form-control" value="{{ old('childname1',$children_data[0]['child_name']) }}">
                </div>
                <!-- バリデーションエラー -->
                @error('childname1')
                <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <!-- 子ども１人目誕生日 -->
            <div class="form-group row form-inline justify-content-center">
                <label for="year1" class="col-sm-2 col-form-label font-weight-bold">誕生日</label>
                <!-- 年 -->
                <div class="form-group">
                    <select class="form-control" name="year1" id="year1">
                        <!-- 未登録の場合 -->
                        @if($children_data[0]['birthyear'] == null)
                        <option value="">-</option>
                        @endif
                        @php
                        $now_year = date('Y');
                        @endphp
                        @for($i=$now_year; $i >= $now_year-8; $i--)
                        @if($children_data[0]['birthyear'] == $i)
                        <!-- 登録済の場合 -->
                        <option value="{{ $i }}" selected>{{ $i }}</option>
                        @else
                        <!-- 未登録の場合 -->
                        <option value="{{ $i }}">{{ $i }}</option>
                        @endif
                        @endfor
                        <option value="">-</option>
                    </select>
                </div>
                <!-- 月 -->
                <div class="form-group">
                    <select class="form-control" name="month1">
                        <!-- 未登録の場合 -->
                        @if($children_data[0]['birthmonth'] == null)
                        <option value="">-</option>
                        @endif
                        @for($i=1; $i<=12; $i++) @if($i===$children_data[0]['birthmonth']) <!-- 登録済の場合 -->
                            <option value="{{ $i }}" selected>{{ $i }}</option>
                            @else
                            <!-- 未登録の場合 -->
                            <option value="{{ $i }}">{{ $i }}</option>
                            @endif
                            @endfor
                            <option value="">-</option>
                    </select>
                </div>
                <!-- 日 -->
                <div class="form-group">
                    <select class="form-control" name="day1">
                        <!-- 未登録の場合 -->
                        @if($children_data[0]['birthday'] == null)
                        <option value="">-</option>
                        @endif
                        @for($i=1; $i<=31; $i++) @if($i===$children_data[0]['birthday']) <!-- 登録済の場合 -->
                            <option value="{{ $i }}" selected>{{ $i }}</option>
                            @else
                            <!-- 未登録の場合 -->
                            <option value="{{ $i }}">{{ $i }}</option>
                            @endif
                            @endfor
                            <option value="">-</option>
                    </select>
                </div>
            </div>

            <!-- 子ども２人目の名前 -->
            <div class="form-group row form-inline justify-content-center">
                <label for="childname2" class="col-sm-2 col-form-label font-weight-bold">お子さま2人目の名前</label>
                <div class="col-xs-2" id="kaiinjouhou_child2name_display">
                    <span id="kaiinjouhou_child2name_display">
                        <input type="text" name="childname2" id="childname2" class="form-control" value="{{ old('childname2',$children_data[1]['child_name']) }}">
                    </span>
                    <!-- バリデーションエラー -->
                    @error('childname1')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <!-- <span id="none-form1">
                    <p class="kaiinjouhou_update_center">登録無し</p>
                </span>
                <div class="col-xs-2" id="kaiinjouhou-child2add">
                    <input type="text" id="child2addname" class="form-control">
                </div> -->
            </div>

            <!-- 子ども２人目の誕生日 -->
            <div class="form-group row form-inline justify-content-center" id="child2birthday">
                <label for="year2" class="col-sm-2 col-form-label font-weight-bold">誕生日</label>
                <!-- 年 -->
                <div class="form-group">
                    <select class="form-control" name="year2" id="year2">
                        <!-- 未登録の場合 -->
                        @if($children_data[1]['birthyear'] == null)
                        <option value="">-</option>
                        @endif
                        @php
                        $now_year = date('Y');
                        @endphp
                        @for($i=$now_year; $i >= $now_year-8; $i--)
                        @if($children_data[1]['birthyear'] == $i)
                        <!-- 登録済の場合 -->
                        <option value="{{ $i }}" selected>{{ $i }}</option>
                        @else
                        <!-- 未登録の場合 -->
                        <option value="{{ $i }}">{{ $i }}</option>
                        @endif
                        @endfor
                        <option value="">-</option>
                    </select>
                </div>
                <!-- 月 -->
                <div class="form-group">
                    <select class="form-control" name="month2">
                        <!-- 未登録の場合 -->
                        @if($children_data[1]['birthmonth'] == null)
                        <option value="">-</option>
                        @endif
                        @for($i=1; $i<=12; $i++) @if($i===$children_data[1]['birthmonth']) <!-- 登録済の場合 -->
                            <option value="{{ $i }}" selected>{{ $i }}</option>
                            @else
                            <!-- 未登録の場合 -->
                            <option value="{{ $i }}">{{ $i }}</option>
                            @endif
                            @endfor
                            <option value="">-</option>
                    </select>
                </div>
                <!-- 日 -->
                <div class="form-group">
                    <select class="form-control" name="day2">
                        <!-- 未登録の場合 -->
                        @if($children_data[1]['birthday'] == null)
                        <option value="">-</option>
                        @endif
                        @for($i=1; $i<=31; $i++) @if($i===$children_data[1]['birthday']) <!-- 登録済の場合 -->
                            <option value="{{ $i }}" selected>{{ $i }}</option>
                            @else
                            <!-- 未登録の場合 -->
                            <option value="{{ $i }}">{{ $i }}</option>
                            @endif
                            @endfor
                            <option value="">-</option>
                    </select>
                </div>
            </div>

            <div class="kaiinjouhou_update_button1">
                <!-- onclickで、まずはbutton_click1のファンクションを実行。その後switchingのファンクションへnoneを引数として渡す -->
                <!-- <input id="kaiinjouhou_update_button1" class="btn btn-secondary" type="button" value="登録なしへ変更" onclick="button_click1();switching()"> -->
            </div>

            <!-- 登録ボタン -->
            <div class="container">
                <input type="submit" class="add-submit" value="登録する">
            </div>
            <!-- もどるボタン -->
            <div class="container">
                <a href="{{ route('showMypage') }}" class="reset-submit">もどる</a><br>
            </div>
        </form>

    </section>
</div>

<!--/#contents-->

<!-- jQuery -->
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(function() {
        //初期表示を非表示にする
        $('#none-form1').hide();
        $('#kaiinjouhou-child2add').hide();
    });

    //名前➁の登録ありの場合　ボタンの色と文字の表示を切り替えるjs

    function button_click1() {
        var kaiinjouhou_update_button1 = document.getElementById("kaiinjouhou_update_button1");
        if (kaiinjouhou_update_button1.value == "登録なしへ変更") {
            kaiinjouhou_update_button1.setAttribute('class', 'btn btn-success');
            kaiinjouhou_update_button1.setAttribute("value", "追加");
        } else if (kaiinjouhou_update_button1.value == "追加") {
            kaiinjouhou_update_button1.setAttribute('class', 'btn btn-secondary');
            kaiinjouhou_update_button1.setAttribute("value", "登録なしへ変更");

        }
    }

    //名前➁の登録ありの場合 フォーム表・非表示切り替えjs
    function switching() {
        var kaiinjouhou_update_button1_value = document.getElementById("kaiinjouhou_update_button1").value;
        //※ここでのkaiinjouhou_update_button1のvalueは、function buton_clickの処理後に取得される

        if (kaiinjouhou_update_button1_value == "追加") {
            $('#kaiinjouhou_child2name_display').hide();
            $('#kaiinjouhou-child2add').hide();
            $('#child2birthday').hide();

            //登録無しの文言のみ表示させる
            $("#none-form1").show();
        } else if (kaiinjouhou_update_button1_value == "登録なしへ変更") {
            $('#none-form1').hide();
            $('#kaiinjouhou_child2name_display').hide();

            //お子さんの名前➁の入力フォームと誕生日のみ表示させる
            $("#kaiinjouhou-child2add").show();
            $("#child2birthday").show();
        }
    }
</script> -->
@endsection