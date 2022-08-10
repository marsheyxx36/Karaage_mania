@extends('layouts.layout')
@section('content')
  

        <!-- Validation Errors -->

   
    <div class="post-form">
        <h1 class="post-title">唐揚げの情報を投稿する。</h1>
        <form method="POST" action="#" class="mt-5">
            @csrf

            <div class="mb-3">
                <label for="store_name" class="form-label">店舗名：</label>
                <input type="text" id="store_name" class="form-control"  placeholder="店舗名を記入してください" name="store_name">
            </div>
           
            <div class="mb-3">
                <label for="store_name" class="form-label">住所：</label>
                <input type="text" id="address" class="form-control"  placeholder="住所を記入してください" name="address">
                <button type="button" id="btn" class="btn btn-outline-dark mt-3">マップで検索</button>
                <div id="map" class="map mt-2"></div>
            </div>

            <div class="mb-3">
                <label for="area" class="form-label">地域：</label>
                <select class="form-select" id="area"aria-label="Default select example">
                    <option selected disabled>地域を選択してください</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="type" class="form-label">唐揚げのタイプ：</label>
                <select class="form-select" id="type" aria-label="Default select example">
                    <option selected disabled>唐揚げのタイプを選択してください</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
            

            <div class="mb-3">
                <label for="item" class="form-label">商品名：</label>
                <input type="text" id="item" class="form-control"  placeholder="店舗名を記入してください" name="item">
            </div>
            
            <div class="mb-3">
            <label for="comment" class="form-label">コメント：</label>
           <textarea class="form-control" id="comment" aria-label="With textarea" name="comment"></textarea>
        </div>
                
            <x-button class="ml-4">
                {{ __('投稿する') }}
            </x-button>


            
            
            <!-- APIキーを指定してjsファイルを読み込む -->
           
            
            <div class="flex items-center justify-end mt-4">
                
            </div>
        </form>
    </div>
@endsection