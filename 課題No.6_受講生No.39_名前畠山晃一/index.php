<?php
require "APIkey.php";
$apikey = getApiKey();
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>stieven segallery</title>

          <!-- Required meta tags -->
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      
          <!-- Bootstrap CSS -->
          <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

          <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
 
          <link href="https://fonts.googleapis.com/css?family=Mukta" rel="stylesheet">
  
  <link rel="stylesheet" href="top.css">
  <link rel="stylesheet" href="map_slide.css">
  <link rel="stylesheet" href="new_map.css">
  
</head>

<html>
<body>

<section class="section1">
<head>
    <div class="header">
    <img src="images/logo.png" alt="">
    <input class="bgm_btn" type="button" id="sound_off" value="sound_off" onClick="sound3()">
    </div>  
</head>

<div class="image">
    <span class="sa sa--up">
        <p><span>強さ</span>という孤独</br>
            　<span>愛</span>という哀しみ</br>
            　　<span>男</span>という生き方</p>  
        </span>
</div>
<span class="sa sa--up">
  <div class="img_back"></div>
</span>


<div class="containts_course">
  <div class="top_title">
  <img src="images/top_logo.png" alt=""></div>

    <div class="course_text">
    <div class="sa sa--up">
      <p>あなたはセガールの忠実な部下として数々のミッションをこなしてもらいます。</br>
      彼の依頼を忠実に引き受け、セガールさながらトップマフィアを目指してください。</br>
      その強さの為には、自身の命も、そして誰かの愛をも犠牲にする覚悟が必要です。</br>
      <span>その覚悟はあなたにありますか。</span></p>
    </div>
    </div> 

  <div class="rule">
    <div class="sa sa--up">
    <img src="images/rule.png" alt="">
    </div>

    <div class="sa sa--up">
    <div class="rule_text">
    <p>使える手段は三つ、<span>①ナイフ　②ピストル　③精神攻撃　</span>です。</p>
    <ul>
    <li>・<span>ナイフ</span>は至近距離での戦いが得意なので<span>ピストル</span>を持った相手に、勝てます。</li>
    <li>・<span>ピストル</span>を使えば<span>精神攻撃</span>をしようとする相手を撃ち、勝てます。</li>
    <li>・<span>精神攻撃</span>を使えば<span>ナイフ</span>をもった相手にも話術で窮地に追い込むことができ、勝てます。</li>
    <li>・お互いに同じ手段を選んでしまった場合は牽制し合うので、あいことなります。</li>
    </ul>
    </div>
    </div>
  </div>

    <div class="course_img">
        <div class="mask">
          <a class="caption" id="enter">依頼を引き受ける
            <!--<input type="button" id="enter" >--></a>
        </div>
    </div>
</div>

</section>

<section class="section2" style=display:none >
     <!-- .slider>.slide*5{$} -->
     <div class="slider" style="--total: 5">
      <div id="slide-1" class="slide" style="--i:1" tabindex="0"><img src="images/title1.jpg">
        <div class="button"id="mode1">
          Click
        </div>
      </div>
      <div id="slide-2" class="slide" style="--i:2" tabindex="0"><img src="images/title2.jpg">
        <div class="button" id="mode2">
          Click
        </div>
      </div>
      <div id="slide-3" class="slide" style="--i:3" tabindex="0"><img src="images/title3.jpg">
        <div class="button" id="mode3">
          Click
        </div>
      </div>
      <div id="slide-4" class="slide" style="--i:4" tabindex="0"><img src="images/title4.jpg">
        <div class="button" id="mode4">
          Click
        </div>
      </div>

      <nav class="slide-nav">
        <a href="#slide-1" tabindex="-1"><i class="far fa-dot-circle"></i></a>
        <a href="#slide-2" tabindex="-1"><i class="far fa-dot-circle"></i></a>
        <a href="#slide-3" tabindex="-1"><i class="far fa-dot-circle"></i></a>
        <a href="#slide-4" tabindex="-1"><i class="far fa-dot-circle"></i></a>
      </nav>
    </div>
</section>


<section class="section3" style=display:none>
  <div>
    From:<input type="text" id="from" value="">
    To:<input id="to" value="">
    <select id="mode">
        <option value="walking">walking</option>
        <option value="driving">driving</option>-->
    </select>
    <input type="button" id="search" value="ルート検索">
</div>
    <!-- MAP[START] -->
    <button id="start_tracking">Start Tracking</button>
    <button id="stop_tracking">Stop Tracking</button>
    <button id="clear_map">Map Clear</button>
    <div id="myMap" style='position:relative;width:100%;height:700px;'></div>
    <!-- MAP[END] -->

<div id="direction"></div>

<section id="result" class="hidden">
    <!--<p id="result-message" class="result-title"></p>-->
    <div class="result-img">
      <img src="" alt="">
    </div>

    <img id="result-image" src="images/explosion.png" alt=""style="display:none;">

    <div class="form_button">
        <input class="btn-primary btn-sm" type="button" value="knife" onclick="rsp(0);">
        <audio id="sf_know1" preload="auto">
            <source src="images/know.mp3" type="audio/wav">
        </audio>
        <input class="btn-warning btn-sm" type="button" value="pistol" onclick="rsp(1);">
        <audio id="sf_pistol1" preload="auto">
            <source src="images/pistol.mp3" type="audio/wav">
        </audio>
        <input class="btn-danger btn-sm" type="button" value="high-pressure" onclick="rsp(2);">
        <audio id="sf_pressure1" preload="auto">
            <source src="images/pressure.mp3" type="audio/wav">
        </audio>
    </div>
    <div class="endbtn-box"><div class="btn" id="btn-end">return</div></div>
  </section>

<!--ニコラス・ケイジ-->
  <section id="result2" class="hidden">
    <div class="result-img2">
      <img src="" alt="">
    </div>

    <img id="result-image2" src="images/explosion.png" alt=""style="display:none;">

    <div class="form_button">
        <input class="btn-primary btn-sm" type="button" value="knife" onclick="rsp2(0);">
        <audio id="sf_know1" preload="auto">
            <source src="images/know.mp3" type="audio/wav">
        </audio>
        <input class="btn-warning btn-sm" type="button" value="pistol" onclick="rsp2(1);">
        <audio id="sf_pistol1" preload="auto">
            <source src="images/pistol.mp3" type="audio/wav">
        </audio>
        <input class="btn-danger btn-sm" type="button" value="high-pressure" onclick="rsp2(2);">
        <audio id="sf_pressure1" preload="auto">
            <source src="images/pressure.mp3" type="audio/wav">
        </audio>
    </div>
    <div class="endbtn-box"><div class="btn" id="btn-end2">return</div></div>
  </section>
</section>

<section id="result_end" class="hidden">
  <p>ゴール</br>お疲れ様でした。</br>donation is here</p>
  <div style=display:none id="paypal-button-container"></div>
  </div>
 </section>

<section class="section1 section2 section3">
<footer class="footer">
   <p class="footer_text">copylights 2020 Koichi Hatakeyama Rights Reserved .</p>
</footer>
</section>
<!--bootstrap-->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

      <!-- jquery が先 -->
  <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script src="new_map.js"></script>

  <!-- [ MapTypeId ] https://msdn.microsoft.com/en-us/library/mt712700.aspx -->
  <script src="https://www.bing.com/api/maps/mapcontrol?callback=GetMap&key=<?=$apikey?>" async defer></script>
<script src="BmapQuery.js"></script>

<script src="https://www.paypal.com/sdk/js?client-id=sb"></script>
<script>paypal.Buttons().render('body');</script>
<script src="https://www.paypal.com/sdk/js?client-id=SB_CLIENT_ID"> // Required. Replace SB_CLIENT_ID with your sandbox client ID.</script>
<script src="https://www.paypal.com/sdk/js?client-id=sb&currency=USD" data-sdk-integration-source="button-factory"></script>
<script src="paypal.js"></script>


  <script>
    var scrollAnimationElm = document.querySelectorAll('.sa');
    var scrollAnimationFunc = function() {
      for(var i = 0; i < scrollAnimationElm.length; i++) {
      var triggerMargin = 300;//出る幅
      if (window.innerHeight > scrollAnimationElm[i].getBoundingClientRect().top + triggerMargin) {
      scrollAnimationElm[i].classList.add('show');
      }
      }
    }
    window.addEventListener('load', scrollAnimationFunc);
    window.addEventListener('scroll', scrollAnimationFunc);
    //コピペ
  </script>



<script>
  //Initialization processing
  let map;

//最初に実行する関数
function GetMap() {
navigator.geolocation.getCurrentPosition(mapsInit, mapsError, set);
//navigator.geolocation.watchPosition(mapsInit, mapsError, set);
}

const mode1 = document.getElementById('mode1');
const mode2 = document.getElementById('mode2');
const mode3 = document.getElementById('mode3');
const mode4 = document.getElementById('mode4');

function mapsInit(position) {
    //lat=緯度、lon=経度 を取得
    const lat = position.coords.latitude;
    const lon = position.coords.longitude;

    //Map表示
    map = new Bmap("#myMap");
    map.startMap(lat, lon, "canvasDark", 18); //The place is Bellevue.
    //Pinを追加
    let pin = map.pin(lat, lon, "#0000ff");
    //Infoboxを追加
    map.infobox(lat, lon, "Current position");
    const location   = map.setLocation(lat, lon);

  var random2 = Math.floor(Math.random()*9+1)*0.001
  let pin1 = map.pinLayer(random2+lat, random2+lon, "#ff0000");
    map.onPin(pin1, "click", function(){
      var random = Math.floor(Math.random()*9+1);
      $(".result-img").children("img").attr('src', 'https://www.stevensegallery.com/g/'+random+'00'+'/'+random+'00');
      $('#result').removeClass('hidden');   
      setTimeout(function(){
      map.pinLayerClear(pin1);   
  },3000);
  });

  var random2 = Math.floor(Math.random()*9+1)*0.001
  const pin2 = map.pinLayer(random2+lat, random2+lon, "#ff0000");
  map.onPin(pin2, "click", function(){
      var random = Math.floor(Math.random()*9+1);
      $(".result-img").children("img").attr('src', 'https://www.stevensegallery.com/g/'+random+'00'+'/'+random+'00');  
      $('#result').removeClass('hidden');  
      setTimeout(function(){
      map.pinLayerClear(pin2);
  },3000);
  });

  var random2 = Math.floor(Math.random()*9+1)*0.001
  var random3 = Math.floor(Math.random()*9+1)*0.001
  const pin3 = map.pinLayer(random2+lat, random3+lon, "#ff0000");
  map.onPin(pin3, "click", function(){
      var random = Math.floor(Math.random()*9+1);
      $(".result-img").children("img").attr('src', 'https://www.stevensegallery.com/g/'+random+'00'+'/'+random+'00');
      $('#result').removeClass('hidden'); 
      setTimeout(function(){
      map.pinLayerClear(pin3);
  },3000);     
  });

  var random2 = Math.floor(Math.random()*9+1)*0.001
  var random3 = Math.floor(Math.random()*9+1)*0.001
  const pin4 = map.pinLayer(lat-random2, lon-random3, "#ff0000");
  map.onPin(pin4, "click", function(){
      var random = Math.floor(Math.random()*9+1);
      $(".result-img").children("img").attr('src', 'https://www.stevensegallery.com/g/'+random+'00'+'/'+random+'00');
      $('#result').removeClass('hidden');  
      setTimeout(function(){
      map.pinLayerClear(pin4);
  },3000);    
  });

  //ニコラスケイジ
  var random2 = Math.floor(Math.random()*9+1)*0.001*1.5
  var random3 = Math.floor(Math.random()*9+1)*0.001*1.5
  const pin5 = map.pinLayer(lat+random2, lon-random3, "#0000ff");
  map.onPin(pin5, "click", function(){
      var random = Math.floor(Math.random()*9+1);
      $(".result-img2").children("img").attr('src', 'https://www.placecage.com/'+random+'00'+'/'+random+'00');
      $('#result2').removeClass('hidden'); 
      setTimeout(function(){
      map.pinLayerClear(pin5);
  },3000);     
  });

//mapを増やす
  map.onMap("click",function(){
      var random2 = Math.floor(Math.random()*9+1)*0.001
      var random3 = Math.floor(Math.random()*9+1)*0.001
      const pin6 = map.pinLayer(random2+lat, random3+lon, "#ff0000");

  map.onPin(pin6,"click", function(){
        var random = Math.floor(Math.random()*9+1);
        $(".result-img").children("img").attr('src', 'https://www.stevensegallery.com/g/'+random+'00'+'/'+random+'00');
        $('#result').removeClass('hidden');  
        setTimeout(function(){
        map.pinLayerClear(pin6);
  },3000);  
  });  
  }); 

  map.reverseGeocode(location, function(data){

  mode1.addEventListener('click', () => {
  const mode = 'walking';
  const from = data;
  const to = '〒169-0074 東京都新宿区北新宿1-12−11';
  const array = [];
  map.direction("#direction", mode, from , to, []);
  });
 
  mode2.addEventListener('click', () => {
  const mode = 'walking';
  const from = data;
  const to = '〒167-0053 東京都杉並区西荻南３丁目７−６ サンパレス西荻Ⅱ B-101';
  const array = [];
  map.direction("#direction", mode, from , to, [])
 });

 mode3.addEventListener('click', () => {
  const mode = 'walking';
  const from = data;
  const to = '〒164-0003 東京都中野区東中野1-25-10';
  const array = [];
  map.direction("#direction", mode, from , to, [])
});

mode4.addEventListener('click', () => {
  const mode = 'walking';
  const from = data;
  const to = '〒170-0014東京都豊島区池袋1-8-8';
  const array = [];
  map.direction("#direction", mode, from , to, [])
});

  //トラッキング
  document.getElementById("start_tracking").onclick=function(){
  map.startTracking(true); //console.log => true or false
  }

  //Stop
  document.getElementById("stop_tracking").onclick=function(){
  map.stopTracking();                 //Map: Tracking Log Stop.
  console.log(map.getTrackingData()); //Log: Get Tracking Log All Data.
  }

  //Clear Map.
  document.getElementById("clear_map").onclick=function(){
  map.clearMap();          //Map: Clear Map.
  map.clearTrackingData(); //Log: Clear Tracking Log All Data.
  }
});
}//この前にfunction入れてく。
   
function mapsError(error) {
    let e = "";
    if (error.code == 1) { //1＝位置情報取得が許可されてない（ブラウザの設定）
      e = "位置情報が許可されてません";
    }
    if (error.code == 2) { //2＝現在地を特定できない
      e = "現在位置を特定できません";
    }
    if (error.code == 3) { //3＝位置情報を取得する前にタイムアウトになった場合
      e = "位置情報を取得する前にタイムアウトになりました";
    }
    alert("エラー：" + e);
}

const set = {
    //enableHighAccuracy: true, //より高精度な位置を求める
    maximumAge: 20000, //最後の現在地情報取得が20秒以内であればその情報を再利用する設定
    timeout: 10000 //10秒以内に現在地情報を取得できなければ、処理を終了

}
//});
</script>


</div>
</body>

</html>