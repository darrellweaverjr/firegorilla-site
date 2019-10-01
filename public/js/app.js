$(document).ready(function() {

  $('.drawer').drawer();

  if ($(window).width() > 960) {
    document.getElementById("discover-screen-object").style.top = "480px";
    document.getElementById("attack-screen-object").style.top = "500px";
    document.getElementById("create-screen-object").style.top = "520px";
    console.log("greater");
  }

  var prevScrollpos = window.pageYOffset;

  window.onscroll = function() {

    var currentScrollPos = window.pageYOffset;

    console.log(currentScrollPos);

    if ($(window).width() > 900) {
      if (prevScrollpos > currentScrollPos) {
        document.getElementById("navbar").style.top = "0";
      } else {
        document.getElementById("navbar").style.top = "-80px";
      }
    } else {
      document.getElementById("navbar").style.top = "0";
    }

    if (currentScrollPos >= 567) {
      document.getElementById("discover-screen-object").style.position = "relative";
      document.getElementById("discover-screen-object").style.margin = "-460px 0 0 0";

    } else {
      document.getElementById("discover-screen-object").style.position = "fixed";
      document.getElementById("discover-screen-object").style.top = "480px";
      document.getElementById("discover-screen-object").style.margin = "0";
    }

    if (currentScrollPos >= 967) {
      document.getElementById("attack-screen-object").style.position = "relative";
      document.getElementById("attack-screen-object").style.margin = "-420px 0 0 0";
    } else {
      document.getElementById("attack-screen-object").style.position = "fixed";
      document.getElementById("attack-screen-object").style.top = "500px";
      document.getElementById("attack-screen-object").style.margin = "0";
    }

    if (currentScrollPos >= 1467) {
      document.getElementById("create-screen-object").style.position = "relative";
      document.getElementById("create-screen-object").style.margin = "-500px 0 0 0";
    } else {
      document.getElementById("create-screen-object").style.position = "fixed";
      document.getElementById("create-screen-object").style.top = "520px";
      document.getElementById("create-screen-object").style.margin = "0";
    }

    prevScrollpos = currentScrollPos;
  }

    // var controller = $.superscrollorama({
		// 	triggerAtCenter: false,
		// 	playoutAnimations: true
		// });

    // controller.addTween(
    //   '#discover-screen-object',
    //   TweenMax.from( $('#discover-screen-object'), 1,
    //   {
    //     css:{top:'-1250px'},
    //     ease:Quad.easeInOut
    //   })
    // );

    // controller.addTween(
    //   '#discover-screen-object',
    //   (new TimelineLite())
    //     .append([
    //       TweenMax.fromTo($('#discover-screen-object'), 1,
    //         {css:{top: -1250}, immediateRender:true},
    //         {css:{top: 0}})
    //     ]),
    //   1000 // scroll duration of tween
    // );

    // controller.updatePin($('#discover-screen-object'), null, {
  	// 	offset: 200
  	// });
    // controller.addTween('#discover-screen-object', TweenMax.from( $('#discover-screen-object'), 1.5, {css:{top:'-1250px'}, ease:Quad.easeOut}));
    // controller.addTween('#attack-screen-object', TweenMax.from( $('#attack-screen-object'), 2, {css:{top:'-1800px'}, ease:Quad.easeOut}));

});
