/* global scene, ScrollMagic, TweenMax, Power1, Linear,TweenLite*/
/* jshint unused : false */
(function( root, $, undefined ) {
	"use strict";

	$(function () {
		// DOM ready, take it away
        //TweenMax.set("#videos-minppau",{scale:0.7});
        TweenMax.set("#panels",{y:100,opacity:0.5});
        var controller = new ScrollMagic.Controller();
        var scene      = new ScrollMagic.Scene({
            triggerElement: "#videos-minppau"
        })
        //.setClassToggle(".video-cont","scale-e")
        //.setTween("#videos-minppau", 0.5, {y: 1000})
        //.setClassToggle("#videos-minppau","scale-e")

        .addTo(controller);
        //scene.setTween(TweenMax.to("#videos-minppau"), 1, {x: 1000});
        // add a single tween via variable
        //var vidScroll = TweenMax.to("#videos-minppau", 1, {scale: 1,ease:Power1.easeInOut});
        //scene.setTween(vidScroll);

        var scenePanels      = new ScrollMagic.Scene({
            triggerElement: "#panels",
            offset: -200
        })

        .addTo(controller);
        var ayudaPanels = TweenMax.to("#panels", 1, {y: 0, opacity:1 , ease:Power1.easeInOut});
        scenePanels.setTween(ayudaPanels);

        $("#header").headroom();
        TweenLite.to("#hero-text", 2, {text:{value:"Por las hallacas",delimiter:" ", padSpace: true}, ease:Linear.easeNone});
	});

} ( this, jQuery ));
