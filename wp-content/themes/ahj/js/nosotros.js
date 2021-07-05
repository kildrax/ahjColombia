let franciaBtn = document.getElementById("franciaBtn");
let espaniaBtn = document.getElementById("espaniaBtn");
let alemaniaBtn = document.getElementById("alemaniaBtn");
let austriaBtn = document.getElementById("austriaBtn");
let luxemburgoBtn = document.getElementById("luxemburgoBtn");

franciaBtn.addEventListener("click", function () {
    removeActive()
    findImage("Francia");
});
espaniaBtn.addEventListener("click", function () {
    removeActive()
    findImage("España");
});
alemaniaBtn.addEventListener("click", function () {
    removeActive()
    findImage("Alemania");
});
austriaBtn.addEventListener("click", function () {
    removeActive()
    findImage("Austria");
});
luxemburgoBtn.addEventListener("click", function () {
    removeActive()
    findImage("Luxemburgo");
});

function removeActive() {
  let activeImgCountry = document.getElementsByClassName(
    "our-candidates__content-images-img"
  );
  for (let i = 0; i < activeImgCountry.length; i++) {
    activeImgCountry[i].classList.remove("active");
  }
}

function findImage(altText) {
    let imgCountry = document.getElementsByClassName(
      "our-candidates__content-images-img"
    );
    for (let i = 0; i < imgCountry.length; i++) {
      if(imgCountry[i].getAttribute("alt") == altText) {
        imgCountry[i].classList.add("active");
      }
    }
  }
