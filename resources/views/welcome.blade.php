@extends('layouts.app')

@section('content')
    <div class="center jumbotron">
        <div class="text-center">
            <h1 class="mb-3">「家計の大きさ」に合った「保険の大きさ」の見つけ方</h1>
            {{-- ログインページへのリンク --}}
            {!! link_to_route('login', 'ログイン', [], ['class' => 'btn btn-lg btn-primary']) !!}
            {{-- ゲストページへのリンク --}}
            <p class="mt-5">簡易版ゲストログインはこちら => ゲストログインlink</p>
            {{-- ユーザ登録ページへのリンク --}}
            <p class="mt-2">新規登録はこちら => {!! link_to_route('signup.get', 'Sign up now!') !!}</p>
        </div>
    </div>
@endsection