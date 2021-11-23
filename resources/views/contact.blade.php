<!-- お問い合わせページ -->

<!-- layout.blade.php読み込み -->
@extends('layouts.layout')

<!-- ページタイトル -->
@section('title','お問い合わせ ｜ 幼児無料プリントサイト ぷちはぐ')

@section('content')
  <div id="contents">

    <section>
    
    <h2><span>お問い合わせ</span></h2>
    
    <table class="ta1">
    <tr>
    <th>お名前※</th>
    <td><input type="text" name="お名前" size="30" class="ws"></td>
    </tr>
    <tr>
    <th>メールアドレス※</th>
    <td><input type="text" name="メールアドレス" size="30" class="ws"></td>
    </tr>
    <tr>
    <th>お問い合わせ詳細※</th>
    <td><textarea name="お問い合わせ詳細" cols="30" rows="10" class="wl"></textarea></td>
    </tr>
    </table>
    
    <p class="c">
    <input type="submit" value="内容を確認する" class="btn">
    </p>
    
    </section>
    
  </div><!--/#contents-->
@endsection