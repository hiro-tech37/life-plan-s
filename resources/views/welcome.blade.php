@extends('layouts.app')

@section('content')

    @section('content')
    @if (Auth::check())
        <div class="center jumbotron">
            <div class="text-center">
                <p class="mb-4">このサイトは保険募集を目的として作成をしておりません。<br>
                具体的な保険相談は、お近くの保険ショップ等をご利用ください。</p>
                {!! link_to_route('expense.show', '進む', [], ['class' => 'btn btn-lg btn-success']) !!}
            </div>
        </div>
    @else
        <div class="center jumbotron">
            <div class="text-center">
                <h1 class="mb-4">「家計の大きさ」と「保険の大きさ」</h1>
                <p>〜「家計の大きさ」に合わせた「保険の大きさ」をシミュレーション〜</p>
                {{-- ログインページへのリンク --}}
                {!! link_to_route('login', 'ログイン', [], ['class' => 'btn btn-lg btn-primary']) !!}
                {{-- ゲストページへのリンク --}}
                <p class="mt-4">簡易版ゲストログインはこちら => {!! link_to_route('guest-expense.show', 'Trial！') !!}</p>
                {{-- ユーザ登録ページへのリンク --}}
                <p class="mt-2">新規登録はこちら => {!! link_to_route('signup.get', 'Sign up now！') !!}</p>
            </div>
        </div>
    @endif
@endsection