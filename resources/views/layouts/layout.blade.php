<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>@yield('title')</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="無料で利用できる幼児(3歳～6歳)向けの教育、プリントサービスです">
  <!-- csrf -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <!-- bootstrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <!-- css -->
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('css/slide.css') }}">
  <!-- js -->
  <script src="{{ asset('js/fixmenu_pagetop.js') }}"></script>
  <!-- フォント -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/earlyaccess/nicomoji.css" rel="stylesheet">
</head>

<body>
  <div id="container">

    <header>
      <h1 id="logo"><a href="{{ route('showTop') }}"><img src="{{ asset('images/logo1.png') }}" alt="幼児無料プリントサイト ぷちはぐ"></a></h1>
    </header>

    <nav id="menubar">
      <ul>
        <!-- HOME -->
        <li class="{{ url()->current() == route('showTop')? 'current' : ''; }}"><a href="{{ route('showTop') }}">Home</a></li>
        <!-- ログイン・会員登録 -->
        <li class="{{ url()->current() == route('showLogin') || url()->current() ==  route('showSignup') || url()->current() ==  route('showPasswordReset')? 'current' : ''; }}"><a href="{{ route('showLogin') }}">ログイン・会員登録</a></li>
        <!-- プリント -->
        <li class="{{ url()->current() == route('showPrint') || url()->current() == route('showPrintHiragana') || url()->current() == route('showPrintSuzi') || url()->current() == route('showPrintUnpitu') || url()->current() == route('showPrintTentunagi') || url()->current() == route('showPrintProgramming')? 'current' : ''; }}"><a href="{{ route('showPrint') }}">プリントする</a></li>
        <!-- 利用規約 -->
        <li class="{{ url()->current() == route('showMembership')? 'current' : ''; }}"><a href="{{ route('showMembership') }}">利用規約</a></li>
      </ul>
    </nav>

    <!-- メインコンテンツ読み込み -->
    @yield('content')

    <footer>
      <small>Copyright&copy; <a href="{{ route('showTop') }}">幼児無料プリントサイト ぷちはぐ</a> All Rights Reserved.</small>
      <span class="pr">《<a href="https://template-party.com/" target="_blank">Web Design:Template-Party</a>》</span>
    </footer>

  </div><!--/#container-->

  <!--ページの上部に戻る「↑」ボタン-->
  <p class="nav-fix-pos-pagetop"><a href="#"><img src="{{ asset('images/pagetop.png') }}" alt="PAGE TOP"></a></p>

</body>

</html>