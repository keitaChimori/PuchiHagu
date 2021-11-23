<!-- ************************************************* -->
<!-- ************    ひらがな印刷ページ   ************ -->
<!-- ************************************************* -->

<!-- layout.blade.php読み込み -->
@extends('layouts.layout')

<!-- ページタイトル -->
@section('title','ひらがな ｜ 幼児無料プリントサイト ぷちはぐ')

@section('content')
<div id="contents">
    <section class="box1">
        <h2><span>ひらがな印刷ページ</span></h2>

        <p class="text-center">クリックすると印刷ページ(PDFファイル)が開きます。</p>

        <h3>あいうえお</h3>
        <div class="box">
            <table align="center">
                <tr>
                    <td>
                        <a href="{{ asset('pdf/a.pdf') }}" target="_blank">
                            <img src="{{ asset('images/a.png') }}" alt="ひらがな「あ」" hspace="10" vspace="10" class="hiraganawaku">
                        </a>
                    </td>
                    <td>
                        <a href="images/a.pdf" target="_blank">
                            <img src="{{ asset('images/a.png') }}" alt="ひらがな「い」" hspace="10" vspace="10" class="hiraganawaku">
                        </a>
                    </td>
                    <td>
                        <a href="images/a.pdf" target="_blank">
                            <img src="{{ asset('images/a.png') }}" alt="ひらがな「う」" hspace="10" vspace="10" class="hiraganawaku">
                        </a>
                    </td>
                    <td>
                        <a href="images/a.pdf" target="_blank">
                            <img src="{{ asset('images/a.png') }}" alt="ひらがな「え」" hspace="10" vspace="10" class="hiraganawaku">
                        </a>
                    </td>
                    <td>
                        <a href="images/a.pdf" target="_blank">
                            <img src="{{ asset('images/a.png') }}" alt="ひらがな「お」" hspace="10" vspace="10" class="hiraganawaku">
                        </a>
                    </td>
                </tr>
                <tr>
                    <form id="stamp">
                        @for($i = 1; $i <= 5; $i++)
                            <td>
                                <div class='container1'>
                                    <div class='check-container'>
                                        <input type='checkbox' id='<?= $i; ?>' name="hiragana" value="<?= $i; ?>" <?php if(!empty($hiragana["hiragana{$i}"])) {; ?>checked<?php }; ?>>
                                        <label for='<?= $i; ?>'></label>
                                        <span class='tag'><b>できたよ！</b></span>
                                    </div>
                                </div>
                            </td>
                        @endfor
                    </form>
                </tr>
            </table>
        </div>
        <br>
        <h3>かきくけこ</h3>
        <div class="box">
            <table align="center">
                <tr>
                    <td>
                        <a href="images/a.pdf" target="_blank">
                            <img src="{{ asset('images/a.png') }}" alt="ひらがな「か」" hspace="10" vspace="10" class="hiraganawaku">
                        </a>
                    </td>
                    <td>
                        <a href="images/a.pdf" target="_blank">
                            <img src="{{ asset('images/a.png') }}" alt="ひらがな「き」" hspace="10" vspace="10" class="hiraganawaku">
                        </a>
                    </td>
                    <td>
                        <a href="images/a.pdf" target="_blank">
                            <img src="{{ asset('images/a.png') }}" alt="ひらがな「く」" hspace="10" vspace="10" class="hiraganawaku">
                        </a>
                    </td>
                    <td>
                        <a href="images/a.pdf" target="_blank">
                            <img src="{{ asset('images/a.png') }}" alt="ひらがな「け」" hspace="10" vspace="10" class="hiraganawaku">
                        </a>
                    </td>
                    <td>
                        <a href="images/a.pdf" target="_blank">
                            <img src="{{ asset('images/a.png') }}" alt="ひらがな「こ」" hspace="10" vspace="10" class="hiraganawaku">
                        </a>
                    </td>
                </tr>
                <tr>
                    <form id="stamp">
                        @for($i = 6; $i <= 10; $i++)
                            <td>
                                <div class='container1'>
                                    <div class='check-container'>
                                        <input type='checkbox' id='<?= $i; ?>' name="hiragana" value="<?= $i; ?>" <?php if (!empty($hiragana["hiragana{$i}"])) {; ?>checked<?php }; ?>>
                                        <label for='<?= $i; ?>'></label>
                                        <span class='tag'><b>できたよ！</b></span>
                                    </div>
                                </div>
                            </td>
                        @endfor
                    </form>
                </tr>
            </table>
        </div>
        <br>
        <h3>さしすせそ</h3>
        <div class="box">
            <table align="center">
                <tr>
                    <td>
                        <a href="images/a.pdf" target="_blank">
                            <img src="{{ asset('images/a.png') }}" alt="ひらがな「あ」" hspace="10" vspace="10" class="hiraganawaku">
                        </a>
                    </td>
                    <td>
                        <a href="images/a.pdf" target="_blank">
                            <img src="{{ asset('images/a.png') }}" alt="ひらがな「あ」" hspace="10" vspace="10" class="hiraganawaku">
                        </a>
                    </td>
                    <td>
                        <a href="images/a.pdf" target="_blank">
                            <img src="{{ asset('images/a.png') }}" alt="ひらがな「あ」" hspace="10" vspace="10" class="hiraganawaku">
                        </a>
                    </td>
                    <td>
                        <a href="images/a.pdf" target="_blank">
                            <img src="{{ asset('images/a.png') }}" alt="ひらがな「あ」" hspace="10" vspace="10" class="hiraganawaku">
                        </a>
                    </td>
                    <td>
                        <a href="images/a.pdf" target="_blank">
                            <img src="{{ asset('images/a.png') }}" alt="ひらがな「あ」" hspace="10" vspace="10" class="hiraganawaku">
                        </a>
                    </td>
                </tr>
                <tr>
                    <form id="stamp">
                        @for($i = 11; $i <= 15; $i++)
                            <td>
                                <div class='container1'>
                                    <div class='check-container'>
                                        <input type='checkbox' id='<?= $i; ?>' name="hiragana" value="<?= $i; ?>" <?php if (!empty($hiragana["hiragana{$i}"])) {; ?>checked<?php }; ?>>
                                        <label for='<?= $i; ?>'></label>
                                        <span class='tag'><b>できたよ！</b></span>
                                    </div>
                                </div>
                            </td>
                        @endfor
                    </form>
                </tr>
            </table>
        </div>
        <br>
        <h3>たちつてと</h3>
        <div class="box">
            <table align="center">
                <tr>
                    <td>
                        <a href="images/a.pdf" target="_blank">
                            <img src="{{ asset('images/a.png') }}" alt="ひらがな「あ」" hspace="10" vspace="10" class="hiraganawaku">
                        </a>
                    </td>
                    <td>
                        <a href="images/a.pdf" target="_blank">
                            <img src="{{ asset('images/a.png') }}" alt="ひらがな「あ」" hspace="10" vspace="10" class="hiraganawaku">
                        </a>
                    </td>
                    <td>
                        <a href="images/a.pdf" target="_blank">
                            <img src="{{ asset('images/a.png') }}" alt="ひらがな「あ」" hspace="10" vspace="10" class="hiraganawaku">
                        </a>
                    </td>
                    <td>
                        <a href="images/a.pdf" target="_blank">
                            <img src="{{ asset('images/a.png') }}" alt="ひらがな「あ」" hspace="10" vspace="10" class="hiraganawaku">
                        </a>
                    </td>
                    <td>
                        <a href="images/a.pdf" target="_blank">
                            <img src="{{ asset('images/a.png') }}" alt="ひらがな「あ」" hspace="10" vspace="10" class="hiraganawaku">
                        </a>
                    </td>
                </tr>
                <tr>
                    <form id="stamp">
                        @for($i = 16; $i <= 20; $i++)
                            <td>
                                <div class='container1'>
                                    <div class='check-container'>
                                        <input type='checkbox' id='<?= $i; ?>' name="hiragana" value="<?= $i; ?>" <?php if (!empty($hiragana["hiragana{$i}"])) {; ?>checked<?php }; ?>>
                                        <label for='<?= $i; ?>'></label>
                                        <span class='tag'><b>できたよ！</b></span>
                                    </div>
                                </div>
                            </td>
                        @endfor
                    </form>
                </tr>
            </table>
        </div>
        <br>
        <h3>なにぬねの</h3>
        <div class="box">
            <table align="center">
                <tr>
                    <td>
                        <a href="images/a.pdf" target="_blank">
                            <img src="{{ asset('images/a.png') }}" alt="ひらがな「あ」" hspace="10" vspace="10" class="hiraganawaku">
                        </a>
                    </td>
                    <td>
                        <a href="images/a.pdf" target="_blank">
                            <img src="{{ asset('images/a.png') }}" alt="ひらがな「あ」" hspace="10" vspace="10" class="hiraganawaku">
                        </a>
                    </td>
                    <td>
                        <a href="images/a.pdf" target="_blank">
                            <img src="{{ asset('images/a.png') }}" alt="ひらがな「あ」" hspace="10" vspace="10" class="hiraganawaku">
                        </a>
                    </td>
                    <td>
                        <a href="images/a.pdf" target="_blank">
                            <img src="{{ asset('images/a.png') }}" alt="ひらがな「あ」" hspace="10" vspace="10" class="hiraganawaku">
                        </a>
                    </td>
                    <td>
                        <a href="images/a.pdf" target="_blank">
                            <img src="{{ asset('images/a.png') }}" alt="ひらがな「あ」" hspace="10" vspace="10" class="hiraganawaku">
                        </a>
                    </td>
                </tr>
                <tr>
                    <form id="stamp">
                        @for($i = 21; $i <= 25; $i++)
                            <td>
                                <div class='container1'>
                                    <div class='check-container'>
                                        <input type='checkbox' id='<?= $i; ?>' name="hiragana" value="<?= $i; ?>" <?php if (!empty($hiragana["hiragana{$i}"])) {; ?>checked<?php }; ?>>
                                        <label for='<?= $i; ?>'></label>
                                        <span class='tag'><b>できたよ！</b></span>
                                    </div>
                                </div>
                            </td>
                        @endfor
                    </form>
                </tr>
            </table>
        </div>
        <br>
        <h3>はひふへほ</h3>
        <div class="box">
            <table align="center">
                <tr>
                    <td>
                        <a href="images/a.pdf" target="_blank">
                            <img src="{{ asset('images/a.png') }}" alt="ひらがな「あ」" hspace="10" vspace="10" class="hiraganawaku">
                        </a>
                    </td>
                    <td>
                        <a href="images/a.pdf" target="_blank">
                            <img src="{{ asset('images/a.png') }}" alt="ひらがな「あ」" hspace="10" vspace="10" class="hiraganawaku">
                        </a>
                    </td>
                    <td>
                        <a href="images/a.pdf" target="_blank">
                            <img src="{{ asset('images/a.png') }}" alt="ひらがな「あ」" hspace="10" vspace="10" class="hiraganawaku">
                        </a>
                    </td>
                    <td>
                        <a href="images/a.pdf" target="_blank">
                            <img src="{{ asset('images/a.png') }}" alt="ひらがな「あ」" hspace="10" vspace="10" class="hiraganawaku">
                        </a>
                    </td>
                    <td>
                        <a href="images/a.pdf" target="_blank">
                            <img src="{{ asset('images/a.png') }}" alt="ひらがな「あ」" hspace="10" vspace="10" class="hiraganawaku">
                        </a>
                    </td>
                </tr>
                <tr>
                    <form id="stamp">
                        @for($i = 26; $i <= 30; $i++)
                            <td>
                                <div class='container1'>
                                    <div class='check-container'>
                                        <input type='checkbox' id='<?= $i; ?>' name="hiragana" value="<?= $i; ?>" <?php if (!empty($hiragana["hiragana{$i}"])) {; ?>checked<?php }; ?>>
                                        <label for='<?= $i; ?>'></label>
                                        <span class='tag'><b>できたよ！</b></span>
                                    </div>
                                </div>
                            </td>
                        @endfor
                    </form>
                </tr>
            </table>
        </div>
        <br>
        <h3>まみむめも</h3>
        <div class="box">
            <table align="center">
                <tr>
                    <td>
                        <a href="images/a.pdf" target="_blank">
                            <img src="{{ asset('images/a.png') }}" alt="ひらがな「あ」" hspace="10" vspace="10" class="hiraganawaku">
                        </a>
                    </td>
                    <td>
                        <a href="images/a.pdf" target="_blank">
                            <img src="{{ asset('images/a.png') }}" alt="ひらがな「あ」" hspace="10" vspace="10" class="hiraganawaku">
                        </a>
                    </td>
                    <td>
                        <a href="images/a.pdf" target="_blank">
                            <img src="{{ asset('images/a.png') }}" alt="ひらがな「あ」" hspace="10" vspace="10" class="hiraganawaku">
                        </a>
                    </td>
                    <td>
                        <a href="images/a.pdf" target="_blank">
                            <img src="{{ asset('images/a.png') }}" alt="ひらがな「あ」" hspace="10" vspace="10" class="hiraganawaku">
                        </a>
                    </td>
                    <td>
                        <a href="images/a.pdf" target="_blank">
                            <img src="{{ asset('images/a.png') }}" alt="ひらがな「あ」" hspace="10" vspace="10" class="hiraganawaku">
                        </a>
                    </td>
                </tr>
                <tr>
                    <form id="stamp">
                        @for($i = 31; $i <= 35; $i++)
                            <td>
                                <div class='container1'>
                                    <div class='check-container'>
                                        <input type='checkbox' id='<?= $i; ?>' name="hiragana" value="<?= $i; ?>" <?php if (!empty($hiragana["hiragana{$i}"])) {; ?>checked<?php }; ?>>
                                        <label for='<?= $i; ?>'></label>
                                        <span class='tag'><b>できたよ！</b></span>
                                    </div>
                                </div>
                            </td>
                        @endfor
                    </form>
                </tr>
            </table>
        </div>
        <br>
        <h3>やゆよ</h3>
        <div class="box">
            <table align="center">
                <tr>
                    <td>
                        <a href="images/a.pdf" target="_blank">
                            <img src="{{ asset('images/a.png') }}" alt="ひらがな「あ」" hspace="10" vspace="10" class="hiraganawaku">
                        </a>
                    </td>
                    <td>
                        <a href="images/a.pdf" target="_blank">
                            <img src="{{ asset('images/a.png') }}" alt="ひらがな「あ」" hspace="10" vspace="10" class="hiraganawaku">
                        </a>
                    </td>
                    <td>
                        <a href="images/a.pdf" target="_blank">
                            <img src="{{ asset('images/a.png') }}" alt="ひらがな「あ」" hspace="10" vspace="10" class="hiraganawaku">
                        </a>
                    </td>
                </tr>
                <tr>
                    <form id="stamp">
                        @for($i = 36; $i <= 38; $i++)
                            <td>
                                <div class='container1'>
                                    <div class='check-container'>
                                        <input type='checkbox' id='<?= $i; ?>' name="hiragana" value="<?= $i; ?>" <?php if (!empty($hiragana["hiragana{$i}"])) {; ?>checked<?php }; ?>>
                                        <label for='<?= $i; ?>'></label>
                                        <span class='tag'><b>できたよ！</b></span>
                                    </div>
                                </div>
                            </td>
                        @endfor
                    </form>
                </tr>
            </table>
        </div>
        <br>
        <h3>らりるれろ</h3>
        <div class="box">
            <table align="center">
                <tr>
                    <td>
                        <a href="images/a.pdf" target="_blank">
                            <img src="{{ asset('images/a.png') }}" alt="ひらがな「あ」" hspace="10" vspace="10" class="hiraganawaku">
                        </a>
                    </td>
                    <td>
                        <a href="images/a.pdf" target="_blank">
                            <img src="{{ asset('images/a.png') }}" alt="ひらがな「あ」" hspace="10" vspace="10" class="hiraganawaku">
                        </a>
                    </td>
                    <td>
                        <a href="images/a.pdf" target="_blank">
                            <img src="{{ asset('images/a.png') }}" alt="ひらがな「あ」" hspace="10" vspace="10" class="hiraganawaku">
                        </a>
                    </td>
                    <td>
                        <a href="images/a.pdf" target="_blank">
                            <img src="{{ asset('images/a.png') }}" alt="ひらがな「あ」" hspace="10" vspace="10" class="hiraganawaku">
                        </a>
                    </td>
                    <td>
                        <a href="images/a.pdf" target="_blank">
                            <img src="{{ asset('images/a.png') }}" alt="ひらがな「あ」" hspace="10" vspace="10" class="hiraganawaku">
                        </a>
                    </td>
                </tr>
                <tr>
                    <form id="stamp">
                        @for($i = 39; $i <= 43; $i++)
                            <td>
                                <div class='container1'>
                                    <div class='check-container'>
                                        <input type='checkbox' id='<?= $i; ?>' name="hiragana" value="<?= $i; ?>" <?php if (!empty($hiragana["hiragana{$i}"])) {; ?>checked<?php }; ?>>
                                        <label for='<?= $i; ?>'></label>
                                        <span class='tag'><b>できたよ！</b></span>
                                    </div>
                                </div>
                            </td>
                        @endfor
                    </form>
                </tr>
            </table>
        </div>
        <br>
        <h3>わをん</h3>
        <div class="box">
            <table align="center">
                <tr>
                    <td>
                        <a href="images/a.pdf" target="_blank">
                            <img src="{{ asset('images/a.png') }}" alt="ひらがな「あ」" hspace="10" vspace="10" class="hiraganawaku">
                        </a>
                    </td>
                    <td>
                        <a href="images/a.pdf" target="_blank">
                            <img src="{{ asset('images/a.png') }}" alt="ひらがな「あ」" hspace="10" vspace="10" class="hiraganawaku">
                        </a>
                    </td>
                    <td>
                        <a href="images/a.pdf" target="_blank">
                            <img src="{{ asset('images/a.png') }}" alt="ひらがな「あ」" hspace="10" vspace="10" class="hiraganawaku">
                        </a>
                    </td>
                </tr>
                <tr>
                    <form id="stamp">
                        @for($i = 44; $i <= 46; $i++)
                            <td>
                                <div class='container1'>
                                    <div class='check-container'>
                                        <input type='checkbox' id='<?= $i; ?>' name="hiragana" value="<?= $i; ?>" <?php if (!empty($hiragana["hiragana{$i}"])) {; ?>checked<?php }; ?>>
                                        <label for='<?= $i; ?>'></label>
                                        <span class='tag'><b>できたよ！</b></span>
                                    </div>
                                </div>
                            </td>
                        @endfor
                    </form>
                </tr>
            </table>
        </div><br>
    </section>
</div>
<!--/#contents-->

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script>
    $(function() {
        $('input[name=hiragana]').change(function() {
            if ($(this).prop('checked')) {
                // チェック時
                var number = $(this).val();

                $.ajax({
                    type: 'POST', // HTTPリクエストメソッドの指定
                    url: '/stamp', // 送信先URLの指定
                    dataType: 'json', // 受信するデータタイプの指定
                    headers: {
                        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
                    },
                    data: {
                        category:'hiragana', // カテゴリー
                        number:number, // スタンプの番号
                        child_id:<?= $child_id ?> , // child_id
                    },
                }).then((res) => {
                    // 通信が成功したとき
                    console.log(res);
                    alert('スタンプをおしたよ！');
                }).fail((error) => {
                    // 通信が失敗したとき
                    console.log(error.statusText);
                    alert('エラー');
                });

            } else {
                // チェックを外した時
                var number = $(this).val();

                $.ajax({
                    type: 'POST', // HTTPリクエストメソッドの指定
                    url: '/stampdelete', // 送信先URLの指定
                    dataType: 'json', // 受信するデータタイプの指定
                    headers: {
                        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
                    },
                    data: {
                        category:'hiragana', // カテゴリー
                        number:number, // スタンプの番号
                        child_id:<?= $child_id ?>, // child_id
                    },
                }).then((res) => {
                    // 通信が成功したとき
                    console.log(res);
                    alert('スタンプをけしたよ！');
                }).fail((error) => {
                    // 通信が失敗したとき
                    console.log(error.statusText);
                    alert('エラー');
                });
            }
        });
    });
</script>
@endsection