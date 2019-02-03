(function($) {
  'use strict';
  const inhabitant = {};
  inhabitant.HeaderFixed = function() {
    const topHeight = document.getElementById('hero-page');
    const topHeightAbout = document.getElementById('about-hero');
    const topHeightAdventure = document.getElementById('adventure-hero');
    if (topHeight) {
      const height = topHeight.clientHeight;
      if ($(window).scrollTop() >= height) {
        // when it scrolls over hero img
        $('header').removeClass('site-header'); // remove
      } else {
        // inside heroimage
        $('header').addClass('site-header');
      }
    } else if (topHeightAbout) {
      const heightAbout = topHeightAbout.clientHeight;
      if ($(window).scrollTop() >= heightAbout) {
        // when it scrolls over hero img
        $('header').removeClass('site-header'); // remove
      } else {
        // inside heroimage
        $('header').addClass('site-header');
      }
    } else if (topHeightAdventure) {
      const heightAdventure = topHeightAdventure.clientHeight;
      if ($(window).scrollTop() >= heightAdventure) {
        // when it scrolls over hero img
        $('header').removeClass('site-header'); // remove
      } else {
        // inside heroimage
        $('header').addClass('site-header');
      }
    } else {
      $('header').removeClass('site-header'); // remove
    }
  };

  //Document On Load
  $(window).on('load', function() {

    const homeHero = document.getElementById('hero-page');
    const aboutHero = document.getElementById('about-hero');
    const AdventureHero = document.getElementById('adventure-hero');
    $('header').removeClass('site-header');
    if (homeHero || aboutHero || AdventureHero) {
      $('header').addClass('site-header');
    } else {
      $('header').removeClass('site-header'); // remove
    }
  });

  // Document on scroll
  $(window).on('scroll', function() {
    inhabitant.HeaderFixed();
  });
})(jQuery);
