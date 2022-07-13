var slideIndexCom = 1;
showSlidesCom(slideIndexCom);

function plusSlidesCom(n) {
  showSlidesCom(slideIndexCom += n);
}

function currentSlide(n) {
  showSlidesCom(slideIndexCom = n);
}

function showSlidesCom(n) {
  var y;
  var slidesCom = document.getElementsByClassName("myCom");
  var dots = document.getElementsByClassName("dot");
  if (n > slidesCom.length) {slideIndexCom = 1}    
  if (n < 1) {slideIndexCom = slidesCom.length}
  for (y = 0; y < slidesCom.length; y++) {
      slidesCom[y].style.display = "none";  
  }
  for (y = 0; y < dots.length; y++) {
      dots[y].className = dots[y].className.replace(" active", "");
  }
  slidesCom[slideIndexCom-1].style.display = "inline-block";  
  dots[slideIndexCom-1].className += " active";
}