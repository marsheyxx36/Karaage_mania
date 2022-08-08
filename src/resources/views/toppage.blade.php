
 @extends('layouts.layout')
 @section('content')
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

            <button class="site-description-button">唐揚げを探してみる！</button>
        </section>    

</main>
@endsection