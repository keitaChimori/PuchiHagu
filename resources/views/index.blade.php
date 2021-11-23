<!-- トップページ -->
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>幼児無料プリントサイト ぷちはぐ</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="無料で利用できる幼児(3歳～6歳)向けの教育、プリントサービスです">
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <!-- css -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/slide.css') }}">
</head>

<body class="home">

    <div id="container">

        <header>
            <h1 id="logo">
                <a href="{{ route('showTop') }}"><img src="{{ asset('images/logo1.png') }}" alt="SAMPLE COMPANY"></a>
            </h1>
            <!--スライドショー-->
            <aside id="mainimg">
                <div class="slide1"></div>
                <div class="slide2"></div>
                <div class="slide3"></div>
                <div class="slide0"><img src="{{ asset('images/waku.png') }}" alt=""></div>
            </aside>
        </header>

        <nav id="menubar">
            <ul>
                <li class="current"><a href="{{ route('showTop') }}">Home</a></li>
                <li><a href="{{ route('showLogin') }}">ログイン・会員登録</a></li>
                <li><a href="{{ route('showPrint') }}">プリントする</a></li>
                <li><a href="{{ route('showMembership') }}">利用規約</a></li>
            </ul>
        </nav>

        <div id="contents">

            <section id="new" class="box1">
                <h2><span>What's New</span></h2>
                <dl>
                    <dt>2021/00/00</dt>
                    <dd>サイトがオープンしました！<span class="newicon">NEW</span></dd>
                </dl>
            </section><!--/#new-->

            <section class="box1">
                <h2><span>「ぷちはぐ」ってなあに？</span></h2>

                <h3>未就学児向けのプリント学習サービスです</h3>

                <p class="text-center">このサイトは3歳(年少)から5歳(年長)までのお子さんを対象とした幼児教育プリントサービスです。<br> ３人のパパママで運営しています。プリントを利用される場合は<a href="{{ route('showMembership') }}">利用規約</a>に同意したものとみなします。
                </p>

                <footer>
                    <small>Copyright&copy; <a href="{{ route('showTop') }}">幼児プリントサイト ぷちはぐ</a> All Rights Reserved.</small>
                    <span class="pr">《<a href="https://template-party.com/" target="_blank">Web Design:Template-Party</a>》</span>
                </footer>
            </section>

        </div><!--/#contents-->

        <!--ページの上部に戻る「↑」ボタン-->
        <p class="nav-fix-pos-pagetop">
            <a href="#"><img src="{{ asset('images/pagetop.png') }}" alt="PAGE TOP"></a>
        </p>
    </div><!-- /.container -->

    <!-- js -->
    <script src="{{ asset('js/fixmenu_pagetop.js') }}"></script>

</body>

</html>