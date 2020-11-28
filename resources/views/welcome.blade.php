@extends('layouts.app')

@section('content')
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
@endsection