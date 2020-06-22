
$("#enter").on("click", function () {
    $(".section1").fadeOut(500);
    setTimeout(function () {$(".section2").fadeIn(1000)}, 1000);
  });

$("#mode1 ,#mode2 ,#mode3 ,#mode4").on("click", function () {
    $(".section2").fadeOut(500);
    setTimeout(function () {$(".section3").fadeIn(500)}, 1000);
    //$(".section3").fadeIn(0);
});

$("#btn-end").on("click",function () {
  $('#result').addClass('hidden');  
});
$("#btn-end2").on("click",function () {
  $('#result2').addClass('hidden');  
});
$("#clear_map").on("click",function () {
  $('#result_end').removeClass('hidden');
  $('#paypal-button-container').fadeIn(500);
});


{
const btn = document.getElementById('end');
let score = 0;

function rsp(playerSelect) {
var result1;
  var random = Math.floor(Math.random() * 3); 

  if (random == 0) {
    $('#result-image').attr('src', 'images/know.png')
    $('#result-image').fadeIn(10);
    $('#result-image').fadeOut(7000);
  } else if (random == 1) {
    $('#result-image').attr('src', 'images/explosion.png')
    $('#result-image').fadeIn(10);
    $('#result-image').fadeOut(7000);
  } else {
    $('#result-image').attr('src', 'images/pressure.png')
    $('#result-image').fadeIn(10);
    $('#result-image').fadeOut(7000);
  }
  if (playerSelect == 0) {
      $("#sf_know1").get(0).play() ;
    } else if (playerSelect == 1) {
      $("#sf_pistol1").get(0).play() ;
    } else {
      $("#sf_pressure1").get(0).play() ;
    }

if (playerSelect == random) {
    result1 = 1;
} else {
    if (playerSelect == 0) {
        if (random== 1) {
            result1 = 2;
        } else {
            result1 = 0;
        }
    } else if (playerSelect == 1) {
        if (random == 0) {
            result1 = 0;
        } else {
            result1 = 2;
        }
    } else {
        if (random == 0) {
            result1 = 2;
        } else {
            result1 = 0;
        }
    }
}

//結果
if (result1 == 0) {
    setTimeout(function () {
    alert('you loose'),
    $(".result-img").children("img").attr('src', 'images/lose.jpg')
    }, 2000);
} else if (result1 == 2) {
    setTimeout(function () {
    alert('you win');
    $(".result-img").children("img").attr('src', 'images/win.jpg')
    }, 2000);
    score++;
} else {
    setTimeout(function () {
    alert('try again');
    $(".result-img").children("img").attr('src', 'images/equal.jpg')}, 2000);
}
console.log(score);
//document.getElementById("end").onclick = function () {
btn.addEventListener('click', () => {
console.log(`Score: ${score}`);
});
}
}
 //localStorage.setItem('key' , result1);



 //ニコラスケイジ
function rsp2(playerSelect) {
    var result1;
    var random = Math.floor(Math.random() * 3); 
  
    if (random == 0) {
      $('#result-image2').attr('src', 'images/know.png')
      $('#result-image2').fadeIn(10);
      $('#result-image2').fadeOut(7000);
    } else if (random == 1) {
      $('#result-image2').attr('src', 'images/explosion.png')
      $('#result-image2').fadeIn(10);
      $('#result-image2').fadeOut(7000);
    } else {
      $('#result-image2').attr('src', 'images/pressure.png')
      $('#result-image2').fadeIn(10);
      $('#result-image2').fadeOut(7000);
    }
    if (playerSelect == 0) {
        $("#sf_know1").get(0).play() ;
      } else if (playerSelect == 1) {
        $("#sf_pistol1").get(0).play() ;
      } else {
        $("#sf_pressure1").get(0).play() ;
      }
  
  if (playerSelect == random) {
      //result1 = 4;5が勝ち、3が負け
      //あいこがでたらもう一回勝負
      var random2 = Math.floor(Math.random() * 3); 
    if (playerSelect == random2) {
        result1 = 4;
    } else if (playerSelect == 0) {
        if (random2 == 1) {
            $('#result-image2').attr('src', 'images/pistol.png')
            $('#result-image2').fadeIn(10);
            $('#result-image2').fadeOut(7000);
            result1 = 5;
        } else {
            $('#result-image2').attr('src', 'images/pressure.png')
            $('#result-image2').fadeIn(10);
            $('#result-image2').fadeOut(7000);
            result1 = 3;
        }
    } else if (playerSelect == 1) {
        if (random2 == 0) {
            $('#result-image2').attr('src', 'images/know.png')
            $('#result-image2').fadeIn(10);
            $('#result-image2').fadeOut(7000);
            result1 = 3;
        } else {
            $('#result-image2').attr('src', 'images/pressure.png')
            $('#result-image2').fadeIn(10);
            $('#result-image2').fadeOut(7000);
            result1 = 5;
        }
    } else {
        if (random == 0) {
            $('#result-image2').attr('src', 'images/know.png')
            $('#result-image2').fadeIn(10);
            $('#result-image2').fadeOut(7000);
            result1 = 5;
        } else {
            $('#result-image2').attr('src', 'images/pistol.png')
            $('#result-image2').fadeIn(10);
            $('#result-image2').fadeOut(7000);
            result1 = 3;
        }
    }
   

  } else {
      if (playerSelect == 0) {
          if (random== 1) {
              result1 = 5;
          } else {
              result1 = 3;
          }
      } else if (playerSelect == 1) {
          if (random == 0) {
              result1 = 3;
          } else {
              result1 = 5;
          }
      } else {
          if (random == 0) {
              result1 = 5;
          } else {
              result1 = 3;
          }
      }
  }
  
  //結果

  if (result1 == 3) {
      setTimeout(function () {
      alert('you loose'),
      $(".result-img2").children("img").attr('src', 'images/lose2.jpg')
      }, 2000);
  } else if (result1 == 5) {
      setTimeout(function () {
      alert('you win');
      $(".result-img2").children("img").attr('src', 'images/win2.jpg')
      }, 2000);
  } else {
      setTimeout(function () {
      alert('try again');
      $(".result-img2").children("img").attr('src', 'images/equal2.jpg')}, 2000);
  }
  }
