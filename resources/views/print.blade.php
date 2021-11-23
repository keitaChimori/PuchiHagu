<!-- プリントページ -->

<!-- layout.blade.php読み込み -->
@extends('layouts.layout')

<!-- ページタイトル -->
@section('title','プリント ｜ 幼児無料プリントサイト ぷちはぐ')

@section('content')
  <div id="contents">

    <section class="box1">
      <h2>プリント</h2>

      <table cellpadding="0" cellspacing="10" align="center">
        <tbody>
          <tr>
            <td>
              <img src="{{ asset('images/hiragana.png') }}" alt="ひらがなプリント" width="300" height="">
            </td>
            <td>
              <a href="{{ route('showPrintHiragana') }}" class="btn btn-malformation1">「ひらがな」を印刷</a>
            </td>
            <td>
              <img src="{{ asset('images/suzi.png') }}" alt="すうじプリント" width="300" height=""></p>
            </td>
            <td>
              <a href="{{ route('showPrintSuzi') }}" class="btn btn-malformation2">「すうじ」を印刷</a>
            </td>
          </tr>
        </tbody>
      </table>

      <table cellpadding="0" cellspacing="30" align="center">
        <tbody>
          <tr>
            <td>
              <img src="{{ asset('images/unpitsu.png') }}" alt="運筆プリント" width="300" height="">
            </td>
            <td>
              <a href="{{ route('showPrintUnpitu') }}" class="btn btn-malformation3">「運筆」を印刷</a>
            </td>
            <td>
              <img src="{{ asset('images/tentunagi.png') }}" alt="点つなぎプリント" width="300" height=""></p>
            </td>
            <td>
              <a href="{{ route('showPrintTentunagi') }}" class="btn btn-malformation4">「点つなぎ」を印刷</a>
            </td>
          </tr>
        </tbody>
      </table>

      <table cellpadding="0" cellspacing="20" align="center">
        <tbody>
          <tr>
            <td>
              <img src="{{ asset('images/programming.png') }}" alt="プログラミングプリント" width="300" height="">
            </td>
            <td>
              <a href="{{ route('showPrintProgramming') }}" class="btn btn-malformation5">「プログラミング」を印刷</a>
            </td>
          </tr>
        </tbody>
      </table>

    </section>

  </div><!--/#contents-->
@endsection