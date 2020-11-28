@extends('layouts.app')

@section('content')
        
        <h1>家計のサイズを計りましょう</h1>
        <p>まずは家計の大きさを計算します。<br>
          被保険者（＝保険の対象者）が亡くなった後、月々の収入と支出はどうなるか、入力してみてください。</p>
       
             {!! Form::open( ['route' => 'guest-expense.store']) !!}

                <div class="form-group">
                    {!! Form::label('guest_income', '死亡後の収入：') !!}
                    {!! Form::text('guest_income', null) !!}
                </div>
                
                 <div class="form-group">
                    {!! Form::label('guest_expense', '死亡後の支出：') !!}
                    {!! Form::text('guest_expense', null) !!}
                </div>

                {!! Form::submit('計算する', ['class' => 'btn btn-outline-primary']) !!}

            {!! Form::close() !!}
            
            <p class="mt-4">収入：{{$guest_income}}万円/月　　支出：{{$guest_expense}}万円/月</p>
            <p style="font-weight:bold">合計：{{$guest_total_expense}}万円/月</p>
            
            <p　class="mt-4">{{$text}}</p>
            
            <!--進むリンクボタン-->
            @if (($guest_total_expense) < 0)
            　<p>(計算結果のメモをとって、次へ進んでください。)</p>
              {!! link_to_route('guest-chart.show', '進む', [], ['class' => 'btn btn-success']) !!}
              
            @endif
           
@endsection