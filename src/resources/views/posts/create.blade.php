@extends('layouts.layout')
<x-guest-layout>
        <form method="POST" action="/post" class="user-form">
            @csrf

            <!-- Name -->
            <div class="mb-5">
                <label for="store_name">店舗名</label>

                <input id="store_name" class="block mt-1 w-full" type="text" name="name" value="" required autofocus />
            </div>

            <!-- Email Address -->
           
                <x-label for="area" value="">地域</label>

                <select id="area" class="block mt-1 w-full" name="area" :value="" required >
                    <option value="北海道"></option>
                    <option value="東北"></option>
                    <option value="関東"></option>
                    <option value="甲信越"></option>
                    <option value="東海"></option>
                    <option value="近畿"></option>
                    <option value="四国"></option>
                    <option value="中国"></option>
                    <option value="九州・沖縄"></option>
                </select>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" class="mt-5"/>

                <x-dropdown id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
              

                <x-button class="ml-4">
                    {{ __('投稿') }}
                </x-button>
            </div>
        </form>
</x-guest-layout>
