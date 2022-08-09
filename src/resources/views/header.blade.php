<header class="fixed-top">
<nav class="navbar navbar-expand-lg navbar-light bg-warning">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">KARAAGE MANIA</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse ml-auto" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link " aria-current="page" href="#">最新投稿一覧</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">地域から探す</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">タイプで探してみる</a>
          </li>
          @guest
          <li class="nav-item">
            <a class="nav-link" href="/login">ログイン</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/register">新規登録</a>
          </li>
          @endguest
          
          @auth

          <li class="nav-item">
            <a class="nav-link" href="/post/create">投稿する</a>
          </li>
          <li class="nav-item">
            <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('ログアウト') }}
                    </x-responsive-nav-link>
                </form>
          </li>
          @endauth
        </ul>
      </div>
    </div>
  </nav>
</header>