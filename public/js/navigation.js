$(document).ready(function() {
  $('.drawer').drawer();
});

var prevScrollpos = window.pageYOffset;

window.onscroll = function() {

  var currentScrollPos = window.pageYOffset;


  if ($(window).width() > 900) {
    if (prevScrollpos > currentScrollPos) {
      document.getElementById("navbar").style.top = "0";
    } else {
      document.getElementById("navbar").style.top = "-80px";
    }
  } else {
    document.getElementById("navbar").style.top = "0";
  }

  prevScrollpos = currentScrollPos;
}
