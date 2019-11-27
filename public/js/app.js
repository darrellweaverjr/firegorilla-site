$(document).ready(function() {

  $('.drawer').drawer();

  var prevScrollpos = window.pageYOffset;

  window.onscroll = function() {
    var currentScrollPos = window.pageYOffset;
    // Nav Bar Animation
    if ($(window).width() > 900) {
      if (prevScrollpos > currentScrollPos) {
        document.getElementById("navbar").style.top = "0";
      } else {
        document.getElementById("navbar").style.top = "-80px";
      }
    } else {
      document.getElementById("navbar").style.top = "0";
    }
    // Attachk Screen Section 2
    if (currentScrollPos >= 633) {
      document.getElementById("attack-screen-object").style.position = "fixed";
      document.getElementById("attack-screen-object").style.margin = "-1030px 0 0 0";
    } else if (currentScrollPos <= 634) {
      document.getElementById("attack-screen-object").style.position = "relative";
      document.getElementById("attack-screen-object").style.margin = "-395px 0 0 0";
    }
    if (currentScrollPos >= 1133) {
      document.getElementById("attack-screen-object").style.position = "relative";
      document.getElementById("attack-screen-object").style.margin = "100px 0 0 0";
    }
    // Create Screen Section 3
    if (currentScrollPos >= 633) {
      document.getElementById("create-screen-object").style.position = "fixed";
      document.getElementById("create-screen-object").style.margin = "-1590px 0 0 0";
    } else if (currentScrollPos <= 634) {
      document.getElementById("create-screen-object").style.position = "relative";
      document.getElementById("create-screen-object").style.margin = "-956px 0 0 0";
    }
    if (currentScrollPos >= 1620) {
      document.getElementById("create-screen-object").style.position = "absolute";
      document.getElementById("create-screen-object").style.margin = "40px 0 0 0";
      console.log("test 1663");
    }
    prevScrollpos = currentScrollPos;
  }

});
