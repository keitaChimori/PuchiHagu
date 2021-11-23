<!-- ************************************ -->
<!-- ****  プログラミング印刷ページ  **** -->
<!-- ************************************ -->
<!-- layout.blade.php読み込み -->
@extends('layouts.layout')

<!-- ページタイトル -->
@section('title','プログラミング ｜ 幼児無料プリントサイト ぷちはぐ')

@section('content')

<div id="contents">

    <section class="box1">

        <h2>プログラミング印刷ページ</h2>

        <p class="text-center">クリックすると印刷ページ(PDFファイル)が開きます</p>

        <h3>１</h3>
        <div class="box">
            <table align="center">
                <tr>
                    <td>
                        <a href="images/a.pdf" target="_blank">
                            <img src="{{ asset('images/a.png') }}" alt="ひらがな「あ」" hspace="10" vspace="10" style="border:solid 5px #d790ec">
                        </a>
                    </td>
                    <td>
                        <a href="images/a.pdf" target="_blank">
                            <img src="{{ asset('images/a.png') }}" alt="ひらがな「あ」" hspace="10" vspace="10" style="border:solid 5px #d790ec">
                        </a>
                    </td>
                    <td>
                        <a href="images/a.pdf" target="_blank">
                            <img src="{{ asset('images/a.png') }}" alt="ひらがな「あ」" hspace="10" vspace="10" style="border:solid 5px #d790ec">
                        </a>
                    </td>
                    <td>
                        <a href="images/a.pdf" target="_blank">
                            <img src="{{ asset('images/a.png') }}" alt="ひらがな「あ」" hspace="10" vspace="10" style="border:solid 5px #d790ec">
                        </a>
                    </td>
                    <td>
                        <a href="images/a.pdf" target="_blank">
                            <img src="{{ asset('images/a.png') }}" alt="ひらがな「あ」" hspace="10" vspace="10" style="border:solid 5px #d790ec">
                        </a>
                    </td>
                </tr>
                <tr>
                    <form id="stamp">
                        <?php for ($i = 1; $i <= 5; $i++) : ?>
                            <td>
                                <div class='container1'>
                                    <div class='check-container'>
                                        <input type='checkbox' id='<?= $i; ?>' name="programming" value="<?= $i; ?>" <?php if (!empty($programming["programming{$i}"])) {; ?>checked<?php }; ?>>
                                        <label for='<?= $i; ?>'></label>
                                        <span class='tag'><b>できたよ！</b></span>
                                    </div>
                                </div>
                            </td>
                        <?php endfor; ?>
                    </form>
                </tr>
            </table>
        </div>
        <br>
        <h3>２</h3>
        <div class="box">
            <table align="center">
                <tr>
                    <td>
                        <a href="images/a.pdf" target="_blank">
                            <img src="{{ asset('images/a.png') }}" alt="ひらがな「あ」" hspace="10" vspace="10" style="border:solid 5px #d790ec">
                        </a>
                    </td>
                    <td>
                        <a href="images/a.pdf" target="_blank">
                            <img src="{{ asset('images/a.png') }}" alt="ひらがな「あ」" hspace="10" vspace="10" style="border:solid 5px #d790ec">
                        </a>
                    </td>
                    <td>
                        <a href="images/a.pdf" target="_blank">
                            <img src="{{ asset('images/a.png') }}" alt="ひらがな「あ」" hspace="10" vspace="10" style="border:solid 5px #d790ec">
                        </a>
                    </td>
                    <td>
                        <a href="images/a.pdf" target="_blank">
                            <img src="{{ asset('images/a.png') }}" alt="ひらがな「あ」" hspace="10" vspace="10" style="border:solid 5px #d790ec">
                        </a>
                    </td>
                    <td>
                        <a href="images/a.pdf" target="_blank">
                            <img src="{{ asset('images/a.png') }}" alt="ひらがな「あ」" hspace="10" vspace="10" style="border:solid 5px #d790ec">
                        </a>
                    </td>
                </tr>
                <tr>
                    <form id="stamp">
                        <?php for ($i = 6; $i <= 10; $i++) : ?>
                            <td>
                                <div class='container1'>
                                    <div class='check-container'>
                                        <input type='checkbox' id='<?= $i; ?>' name="programming" value="<?= $i; ?>" <?php if (!empty($programming["programming{$i}"])) {; ?>checked<?php }; ?>>
                                        <label for='<?= $i; ?>'></label>
                                        <span class='tag'><b>できたよ！</b></span>
                                    </div>
                                </div>
                            </td>
                        <?php endfor; ?>
                    </form>
                </tr>
            </table>
        </div>
        <br>
        <h3>3</h3>
        <div class="box">
            <table align="center">
                <tr>
                    <td>
                        <a href="images/a.pdf" target="_blank">
                            <img src="{{ asset('images/a.png') }}" alt="ひらがな「あ」" hspace="10" vspace="10" style="border:solid 5px #d790ec">
                        </a>
                    </td>
                    <td>
                        <a href="images/a.pdf" target="_blank">
                            <img src="{{ asset('images/a.png') }}" alt="ひらがな「あ」" hspace="10" vspace="10" style="border:solid 5px #d790ec">
                        </a>
                    </td>
                    <td>
                        <a href="images/a.pdf" target="_blank">
                            <img src="{{ asset('images/a.png') }}" alt="ひらがな「あ」" hspace="10" vspace="10" style="border:solid 5px #d790ec">
                        </a>
                    </td>
                    <td>
                        <a href="images/a.pdf" target="_blank">
                            <img src="{{ asset('images/a.png') }}" alt="ひらがな「あ」" hspace="10" vspace="10" style="border:solid 5px #d790ec">
                        </a>
                    </td>
                    <td>
                        <a href="images/a.pdf" target="_blank">
                            <img src="{{ asset('images/a.png') }}" alt="ひらがな「あ」" hspace="10" vspace="10" style="border:solid 5px #d790ec">
                        </a>
                    </td>
                </tr>
                <tr>
                    <form id="stamp">
                        <?php for ($i = 11; $i <= 15; $i++) : ?>
                            <td>
                                <div class='container1'>
                                    <div class='check-container'>
                                        <input type='checkbox' id='<?= $i; ?>' name="programming" value="<?= $i; ?>" <?php if (!empty($programming["programming{$i}"])) {; ?>checked<?php }; ?>>
                                        <label for='<?= $i; ?>'></label>
                                        <span class='tag'><b>できたよ！</b></span>
                                    </div>
                                </div>
                            </td>
                        <?php endfor; ?>
                    </form>
                </tr>
            </table>
        </div>
</div>
<!--/#contents-->

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script>
    $(function() {
        $('input[name=programming]').change(function() {
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
                        category: 'programming', // カテゴリー
                        number: number, // スタンプの番号
                        child_id: <?= $child_id ?>, // child_id
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
                        category: 'programming', // カテゴリー
                        number: number, // スタンプの番号
                        child_id: <?= $child_id ?>, // child_id
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