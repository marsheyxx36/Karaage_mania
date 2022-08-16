@extends('layouts.layout')
@section('content')
  
    <div class="post-form">
        <h1 class="post-title">唐揚げの情報を投稿する。</h1>
        @if (count($errors) > 0)
        <p>入力に問題があります。再入力して下さい。</p>
        @endif

        <form method="post" action="{{ route('post.store') }}" class="mt-5" enctype="multipart/form-data">
            @csrf
        
            <div class="mb-3">
            
                <label for="store_name" class="form-label">店舗名：</label>
             
                <input type="text" id="store_name" class="form-control"  placeholder="店舗名を記入してください" name="store_name">
            @error('store_name')
                <p class="error-message mt-3">{{$message}} </p>
            @enderror
            </div>
           
            <div class="mb-3">
                <label for="store_name" class="form-label">住所：</label>
                <input type="text" id="address" class="form-control"  placeholder="住所を記入してください" name="address">
                @error('address')
                <p class="error-message mt-3">{{$message}} </p>
            @enderror
                <button type="button" id="btn" class="btn btn-outline-dark mt-3">マップで検索</button>
                <div id="map" class="map mt-2"></div>
            </div>

            <div class="mb-3">
                <label for="area" class="form-label">地域：</label>
                <select class="form-select" id="area" aria-label="Default select example" name="area">
                    <option selected disabled>地域を選択してください</option>
                    @foreach(config('pref') as $pref_id => $name)
                  <option value="{{ $pref_id }}">{{ $name }}</option>
                @endforeach
                </select>
                @error('area')
                <p class="error-message mt-3">{{$message}} </p>
            @enderror
            </div>

            <div class="mb-3">
                <label for="type" class="form-label">唐揚げのタイプ：</label>
                <select class="form-select" id="type" aria-label="Default select example" name="type">
                    <option selected disabled>唐揚げのタイプを選択してください</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
                @error('type')
                <p class="error-message mt-3">{{$message}} </p>
            @enderror
            </div>
            

            <div class="mb-3">
                <label for="item" class="form-label">商品名：</label>
                <input type="text" id="item" class="form-control"  placeholder="店舗名を記入してください" name="item">
                @error('item')
                <p class="error-message mt-3">{{$message}} </p>
            @enderror
            </div>
            
            <div class="mb-3">
            <label for="comment" class="form-label">コメント：</label>
           <textarea class="form-control" id="comment" aria-label="With textarea" name="comment"></textarea>
           @error('comment')
           <p class="error-message mt-3">{{$message}} </p>
       @enderror
        </div>
                
        <div class="input-group mb-3">

            <input type="file" class="form-control" id="inputGroupFile02" name="image" >
            <label class="input-group-text" for="inputGroupFile02">Upload</label>
          </div>

          
            <img id="preview" src="" style="max-width:200px;">
            @error('image')
            <p class="error-message mt-3">{{$message}} </p>
        @enderror
            <x-button class="ml-4 mt-3">
                {{ __('投稿する') }}
            </x-button>
            
            <!-- APIキーを指定してjsファイルを読み込む -->
           
            
            <div class="flex items-center justify-end mt-4">
                
            </div>
        </form>
    </div>
@endsection