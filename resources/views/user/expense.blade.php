@extends('layouts.app')

@section('content')     
        
    
        <h1>家計のサイズを計りましょう</h1>
        <p>入力してね</p>
        
        <div class="container" style=width:100%>
            {!! Form::model($expenses, ['route' => 'expense.store']) !!}
            
        <div class="row">
        <div class="col-6">
        <table class="table table-bordered">
                
            <thead class="thead-light">
                <tr>
                  <th scope="col" class="text-center align-middle" style="width:20%">支出</th>
                  <th scope="col" style="width:30%">(万円/月)</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                  <td scope="row" class="text-center align-middle" style="width:20%">住居費：</td>
                  <td style="width:30%" class="form-group">{!! Form::text('expense_a', old('expense_a'), ['class' => 'form-control']) !!}</td>
                </tr>
                <tr>
                  <td scope="row" class="text-center align-middle" style="width:20%">生活費：</td>
                  <td style="width:30%" class="form-group"> {!! Form::text('expense_b', old('expense_b'), ['class' => 'form-control']) !!}</td>
                </tr>
                <tr>
                  <td scope="row" class="text-center align-middle" style="width:20%">お小遣い：</td>
                  <td style="width:30%" class="form-group"> {!! Form::text('expense_c', old('expense_c'), ['class' => 'form-control']) !!}</td>
                </tr>
            </tbody>
            
        </table>
        </div>
        <div class="col-6">
        <table class="table table-bordered">
                
            <thead class="thead-light">
                <tr>
                  <th scope="col" class="text-center align-middle" style="width:20%">収入</th>
                  <th scope="col" style="width:30%">(万円/月)</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                  <td scope="row" class="text-center align-middle" style="width:20%">主収入：</td>
                  <td style="width:30%" class="form-group"> {!! Form::text('income_a', old('income_a'), ['class' => 'form-control']) !!}</td>
                </tr>
                <tr>
                  <td scope="row" class="text-center align-middle" style="width:20%">副収入：</td>
                  <td style="width:30%" class="form-group"> {!! Form::text('income_b', old('income_b'), ['class' => 'form-control']) !!}</td>
                </tr>
                <tr>
                  <td scope="row" class="text-center align-middle" style="width:20%">遺族年金：</td>
                  <td style="width:30%" class="form-group"> {!! Form::text('income_c', old('income_c'), ['class' => 'form-control']) !!}</td>
                </tr>
            </tbody>
          
        </table>
        </div>
        </div>
         {!! Form::submit('計算', ['class' => 'btn btn-primary']) !!}
            
         {!! Form::close() !!}
        </div>
        
         
        @if (isset($expenses) )
         <p>合計：{{$expenses->total_expense}}万円/月</p>
                
            @if($expenses->total_expense >= 0)
            <p>なんと、収支がマイナスになりませんでした！！　　この場合、生命保険は不要です。</p>
            @else
            <p>このマイナス分をうまく補いましょう。</p>
            @endif
        
        
        @endif
        
            
            <!--進むリンクボタン-->
            進むボタン
        

        
@endsection