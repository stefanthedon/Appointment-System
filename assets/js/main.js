
//MODALS
var modal = document.getElementById('sign-in');

window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

var modal1 = document.getElementById('book');

window.onclick = function(event) {
    if (event.target == modal1) {
        modal1.style.display = "none";
    }
}

//jQUERY
$(function () {
    $("#datepicker").datepicker({
                dateFormat: "dd-M-yy",
                changeYear: true,
                changeMonth:true,
                yearRange: '2018:2024'  
    });
});

$( "#radioset" ).buttonset();



//SLIDERS

var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("slides");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  slides[slideIndex-1].style.display = "block";  
}