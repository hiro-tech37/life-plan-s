@extends('layouts.app')

@section('content')
        
        <h1>家計のサイズを計りましょう</h1>
        <p>入力してね</p>
       
             {!! Form::open( ['route' => 'guest-expense.store']) !!}

                <div class="form-group">
                    {!! Form::label('guest_income', '死亡後の収入：') !!}
                    {!! Form::text('guest_income', null) !!}
                </div>
                
                 <div class="form-group">
                    {!! Form::label('guest_expense', '死亡後の支出：') !!}
                    {!! Form::text('guest_expense', null) !!}
                </div>

                {!! Form::submit('収支', ['class' => 'btn btn-primary']) !!}

            {!! Form::close() !!}
            
            <p class="mt-4">収入：{{$guest_income}}万円/月　　支出：{{$guest_expense}}万円/月</p>
            <p>合計：{{$guest_total_expense}}万円/月</p>
            
            @if($guest_total_expense >= 0)
            <p>なんと、収支がマイナスになりませんでした！！　　この場合、生命保険は不要です。</p>
            @else
            <p>このマイナス分をうまく補いましょう。</p>
            @endif
            
            <!--進むリンクボタン-->
            進むボタン
           
@endsection