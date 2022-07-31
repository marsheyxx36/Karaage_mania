<!doctype html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Karaage Mania</title>
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <header>
        <div class="header-left">
            <img src="{{asset('images/icon2.png')}}" alt="" class="header-logo">
            <div class="header-title">KARAAGE MANIA</div>
        </div>
     
        <nav class="header-right">
            <ul class="header-nav">
                <li class="header-nav-item">最新投稿一覧</li>
                <li class="header-nav-item">地域から探してみる</li>
                <li class="header-nav-item">タイプで探してみる</li>
                <li class="header-nav-item">ログイン</li>
                <li class="header-nav-item">新規登録</li>
            </ul>
        </nav>
        
    </header>
    <main>
        <section>
        <div class="main-capture">
                <img src="{{asset('images/PAK88_syokutakukaraage20150203190242_TP_V4.jpg')}}" alt="" class="main-image">
                <h1 class="main-catch">食べたい唐揚げにきっと出会えるサイト</h1>
        </div>
        
        </section>

        <section class="section2">
            <div class="description-title">
                <img src="{{asset('images/icon1.png')}}" alt="" class="description-title-logo">
                <h2>KARAAGE MANIAとは？</h2>
            </div>
            
            <p class="site-description">
                ーKARAAGE MANIAは唐揚げの情報共有サイトになります。<br>
                この地域でおいしい唐揚げを探しているのに中々情報がないなぁ。。と<br>
                困ったことはありませんか？<br>
                ここには全国のユーザーより投稿された、おすすめの唐揚げが集まっています。<br>
                きっとあなたが食べてみたい唐揚げ出会えるはずです。<br>
                NO KARAGE , NO LIFE.<br>
                あなたの好みの唐揚げをぜひ探してみてください。<br>
            </p>
        </section>    

    </main>

    <footer>
    <div class="footer-left">
        <img src="{{asset('images/icon2.png')}}" alt="" class="header-logo">
            <div class="header-title">KARAAGE MANIA</div>
    </div>
    <div class="footer-right">
            <ul class="footer-nav">
                <li class="footer-nav-item">お問い合わせ</li>
                <li class="footer-nav-item">最新投稿一覧</li>
                <li class="footer-nav-item">利用規約</li>
                <li class="footer-nav-item">地域から探してみる</li>
                <li class="footer-nav-item">プライバシーポリシー</li>
                <li class="footer-nav-item">タイプから探してみる</li>
            </ul>
    </div>
    </footer>
  </body>
</html>