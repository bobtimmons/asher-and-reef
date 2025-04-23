<!DOCTYPE html>
<html>
<title>Asher and Reefs Adventure</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/5/w3.css">
<style>
        * {
            margin: 0;
            padding: 0;
        }
        .imgbox {
            display: grid;
            height: 100%;
        }
        .center-fit {
            max-width: 100%;
            max-height: 100vh;
            margin: auto;
        }
</style>

<body>

<div class="w3-content w3-display-container">

<div class="imgbox">

  <img class="mySlides center-fit" src="img/ar-0.png" style="width:100%">
  <img class="mySlides center-fit" src="img/ar-1.png" style="width:100%">
  <img class="mySlides center-fit" src="img/ar-2.png" style="width:100%">
  <img class="mySlides center-fit" src="img/ar-3.png" style="width:100%">
  <img class="mySlides center-fit" src="img/ar-4.png" style="width:100%">
  <img class="mySlides center-fit" src="img/ar-5.png" style="width:100%">
  <img class="mySlides center-fit" src="img/ar-6.png" style="width:100%">
  <img class="mySlides center-fit" src="img/ar-7.png" style="width:100%">
  <img class="mySlides center-fit" src="img/ar-8.png" style="width:100%">
  <img class="mySlides center-fit" src="img/ar-9.png" style="width:100%">
  <img class="mySlides center-fit" src="img/ar-10.png" style="width:100%">
  <img class="mySlides center-fit" src="img/ar-11.png" style="width:100%">
  <img class="mySlides center-fit" src="img/ar-12.png" style="width:100%">
  <img class="mySlides center-fit" src="img/ar-13.png" style="width:100%">
  <img class="mySlides center-fit" src="img/ar-14.png" style="width:100%">
  <img class="mySlides center-fit" src="img/ar-15.png" style="width:100%">
  <img class="mySlides center-fit" src="img/ar-16.png" style="width:100%">

  <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
  <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
</div>

<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
</script>

</body>
</html>
