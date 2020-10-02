const popupOverlay = document.querySelector(".popup-overlay");
const popupClose = document.querySelector(".popup-close");

popupClose.addEventListener("click", () => {
  popupOverlay.style.display = "none";
  localStorage.setItem("popupDisplayed", "true");
});

setTimeout(() => {
    popupOverlay.style.display = "block";
}, 20000);

//  popup-2
const popupOverlay2 = document.querySelector(".popup-overlay2");
const popupCloses = document.querySelector(".popup-closes");

popupCloses.addEventListener("click", () => {
  popupOverlay2.style.display = "none";
  localStorage.setItem("popupDisplayed", "true");
});

setTimeout(() => {
    popupOverlay2.style.display = "block";
}, 30000);




var comingdate = new Date("Nov 9, 2020 00:00:00");

var d = document.getElementById('day');
var h = document.getElementById('hour');
var m = document.getElementById('minutes');
var s = document.getElementById('seconds');

var x = setInterval(function(){
  var now = new Date();
  var des = comingdate.getTime() - now.getTime();
  var days = Math.floor(des/(1000 * 60 * 60 * 24));
  var hours = Math.floor(des%(1000 * 60 * 60 * 24) / (1000 * 60 *60));
  var mins = Math.floor(des%(1000 * 60 * 60) / (1000 * 60));
  var secs = Math.floor(des%(1000 * 60) / 1000);

  day.innerHTML = getTrueNumber(days);
  hour.innerHTML = getTrueNumber(hours);
  minutes.innerHTML = getTrueNumber(mins);
  seconds.innerHTML = getTrueNumber(secs);

  if(des <= 0) clearInterval(x);

},1000);

function getTrueNumber(x) {
  if (x<10) return '0'+x;
  else return x;
}


// typing  

/*const texts=["Branding Expert","Advertising Expert"," customize printing Expert", "Printing Expert" ];
let count=0;
let index=0;
let currentText="";
let letter="";

(function type() {
  if(count===texts.length){
    count=0;
  }
  currentText=texts[count];
  letter=currentText.slice(0, ++index);
  
  document.querySelector(".typing").textContent=letter;
  if(letter.length===currentText.length){
    count++;
    index=0;
  }
  setTimeout(type, 400);
  }
})();*/