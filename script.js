

var status = 0;
document.getElementById('menu').onclick = function () {
  if (status == 0) {
    document.getElementById('nav').style.height = "100px";
    document.getElementById('nav').style.transition = "all 1s ease-out";
    status =1;
  }
  else if(status == 1){
    document.getElementById('nav').style.height = "0px";
    document.getElementById('nav').style.transition = "all 1s ease-in";
    status =0;
  }
}

document.getElementById('menu').onclick = function () {
  if (status == 0) {
    document.getElementById('nav1').style.height = "100px";
    document.getElementById('nav1').style.transition = "all 1s ease-out";
    status =1;
  }
  else if(status == 1){
    document.getElementById('nav1').style.height = "0px";
    document.getElementById('nav1').style.transition = "all 1s ease-in";
    status =0;
  }
}

setInterval(function () {
  slide();
}, 1000);
var i = 0;
var photoArray = ['hazard1.jpg', 'hazard.jpg', 'hazard2.jpg'];
var photo = document.getElementById('hazard');

function slide(){

    photo.setAttribute("src", photoArray[i]);
    i++;
    if (i >= 3) {
      i = 0;
    }
  }
