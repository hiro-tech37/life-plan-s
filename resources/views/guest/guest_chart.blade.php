@extends('layouts.app')

@section('content')
    <div class="container">
      <h1 class="mb-5">「家計のサイズ」と「保険のサイズ」を見比べる</h1>
      
       <p>こちらが、入力結果です。<br>
         月々の不足額をグラフに直すと、このような階段状になります。<br>
         仮に、現在の年齢で死亡があったとすると、「月々の不足額 × 必要な年月」と計算し、合計金額が最も大きくなります。<br>
         これは年月の経過とともに合計金額は減っていくので、右肩下がりの三角形になります。</p>
      
      <canvas id="guestChart"></canvas>
      
        <div class="mt-3">
         
        </div>
        
        <div class="mt-5 mb-5">
          <h2>実際の保険商品の形を見てみましょう</h2>
          <p>保険商品と聞くと難しそうに感じるかもしれませんが、なんとなくの感覚で見ていただければ結構です。</p>
            <div class="row"> 
              <img class="col-md-6" src="image/triangle1.png" alt="三角の保険"><img class="col-md-6" src="image/square.png" alt="四角の保険">
            </div>
            <p class="mt-5">生命保険には三角形タイプと四角形タイプがあります。<br>
               ＣＭでよく目にするのは四角形タイプです。</p>
            <p>しかし、実際に必要な金額をシミュレーションした結果は三角形でした。</p>
        </div>
        <div class="mb-5">
          
          <p>下の図を見てください。</p>
            
            <img class="img-fluid d-block mx-auto mb-3" src="image/triangle2.png">
            
            <p>四角形の中に、三角形を重ねると、右上に余りが出ます。四角い保険では、この余りの部分にも保険料を払っていることになります。<br>
            <p>「掛金が安い！」と謳っているＣＭ商品も、実際に多くの方が契約しているのも、なぜか四角い保険です。<br>
            保険料は保障の大きさに比例して高くも安くもなります。安いということは、何か理由があるということです。</p>
            <p>契約した時に、必要な形にあった保険を選びましたか？<br>
            もし「形」まで考えていなかったとしたら、余計な保険料を払っているのかもしれません。</p>
        </div>

  </div>  
  
  <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
  
  <script>
let chartExpenses = Math.floor();

let ctx = document.getElementById('guestChart').getContext('2d');
let guestChart = new Chart(ctx, {
  type: 'bar',
  data: {
    labels: ['今年', '5年後', '10年後', '15年後', '20年後', '25年後', '30年後'],
    datasets: [{
      data: [chartExpenses*12*30,
            chartExpenses*12*25,
            chartExpenses*12*20,
            chartExpenses*12*15,
            chartExpenses*12*10,
            chartExpenses*12*5,
            chartExpenses*12,
            ],
      label: '不足額',
      backgroundColor: "rgba(219,39,91,0.5)"
    }]
  },
  options: {
     
    title: {
    },
    legend: {
    },
    scales: {
      xAxes: [{
      }],
      yAxes: [{
      }]
    },

  }
});
  </script>
  
<!------------------------------------------------------------------------------------------->
<!------------------------------------------------------------------------------------------->

  <!-- まずjQuery -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

@endsection