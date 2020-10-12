/*----------------------------------------------------*/
  /*  Circle Progress Bars
  /*----------------------------------------------------*/
  
  $(window).scroll(function() {
  
    "use strict";

    if ($().easyPieChart) {
      var count = 4 ;
      var colors = ['#2b98d9', '#3e6dc9', '#2b98d9'];
      $('.percentage').each(function(){

          
        var imagePos = $(this).offset().top;
        var topOfWindow = $(window).scrollTop();
        if (imagePos < topOfWindow+600) {

          $(this).easyPieChart({
            barColor: colors[count],
            trackColor: '#f0f0f0',
            scaleColor: false,
            scaleLength: false,
            lineCap: 'butt',
            lineWidth: 10,
            size: 150,
            rotate: 0,
            animate: 2500,
            onStep: function(from, to, percent) {
                $(this.el).find('.percent').text(Math.round(percent));
              }
          });
        }

        count++;
        if (count >= colors.length) { count = 0};
      });
    }

  });

  
  /*----------------------------------------------------*/
  /*  Statistic Counter
  /*----------------------------------------------------*/
  
  $(document).ready(function($) {
  
    "use strict";
  
    $('.statistic-block').each(function() {
      $(this).appear(function() {
        var $endNum = parseInt($(this).find('.statistic-number').text());
        $(this).find('.statistic-number').countTo({
          from: 0,
          to: $endNum,
          speed: 3000,
          refreshInterval: 30,
        });
      },{accX: 0, accY: 0});
    });

  });


/*-----------------------------------------------------------------------------------*/
/*  PROGRESSBAR
/*-----------------------------------------------------------------------------------*/
(function($) {

  jQuery.fn.progressBar = function( options ) {

    //Default values for progress_bar
    var defaults = {
      height : "30",
      backgroundColor : "#E0E0E0",
      barColor : "#3498db",
      targetBarColor : "#f2f2f2",
      percentage : true,
      shadow : false,
      border : false,
      animation : false,
      animateTarget : false,
    };

    var settings = $.extend( {}, defaults, options );

    return this.each( function() {
      var elem = $( this );
      $.fn.replaceProgressBar( elem, settings );
    });
  };

  $.fn.replaceProgressBar = function( item, settings ) {
    var skill   = item.text();
    var progress  = item.data( 'width' );
    var target    = item.data ( 'target' );
    var bar_classes = ' ';
    var animation_class = '';
    var bar_styles  = 'background-color:' + settings.backgroundColor + ';height:' + settings.height + 'px;';
    if ( settings.shadow ) { bar_classes += 'shadow'; }
    if ( settings.border ) { bar_classes += ' border'; }
    if ( settings.animation ) { animation_class = ' animate'; }

    var overlay = '<div class="sonny_progressbar' + animation_class + '" data-width="' + progress + '">';
    overlay += '<p class="title">' + skill + '</p>';
    overlay += '<div class="bar-container' + bar_classes + '" style="' + bar_styles + '">';

    // Render the progress bar background
    overlay += '<span class="backgroundBar"></span>';

    // Display target bar only if set
    if ( target ) {
      if ( settings.animateTarget ) {
        overlay += '<span class="targetBar loader" style="width:' + target + '%;background-color:' + settings.targetBarColor + ';"></span>';
      }
      else {
        overlay += '<span class="targetBar" style="width:' + target + '%;background-color:' + settings.targetBarColor + ';"></span>';
      }
    }

    // Render the progress bar
    if ( settings.animation ) {
      overlay += '<span class="bar" style="background-color:' + settings.barColor + ';"></span>';
    }
    else {
      overlay += '<span class="bar" style="width:' + progress + '%;background-color:' + settings.barColor + ';"></span>';
    }

    // Render the percentage if enabled
    if ( settings.percentage ) {
      overlay += '<span class="progress-percent" style="line-height:' + settings.height + 'px;">' + progress + '%</span>';
    }

    // End
    overlay += '</div></div>';

    // Render the progress bar on the page
    $( item ).replaceWith( overlay );

  };

  var animate = function() {

    var doc_height = $(window).height();

    $( '.sonny_progressbar.animate' ).each( function() {
      var position = $( this ).offset().top;

      if ( ( $(window).scrollTop() + doc_height - 60 ) > position ) {
        var progress = $( this ).data( 'width' ) + "%";

        $( this ).removeClass( 'animate' );
        $( this ).find( '.bar' ).css('opacity', '1');

        $( this ).find( '.bar' ).animate({
          width : progress,
          opacity : 1
        }, 3000 );
      }

    });

  };

  // Looking for an animation element in the view
  $(window).scroll(function() {

    if ( $( '.sonny_progressbar.animate' ).length < 1 ) {
      return;
    }

    // If there is an animate element visible on the page, trigger the animation
    animate();

  });


})(jQuery);


/*-----------------------------------------------------------------------------------*/
/*  PROGRESS BAR
/*-----------------------------------------------------------------------------------*/
$('.progress-list .progress .bar').progressBar({
    percentage: false,
    animation: true,
    height: 12
});


/**
 * WOW.js Reveal CSS animation as you scroll down a page
 **/
wow = new WOW(
  {
	animateClass: 'animated',
	offset:       100,
	mobile:       false,       // trigger animations on mobile devices (default is true)
	
  }
);
wow.init();

/**
 * jQuery.LocalScroll - Animated scrolling navigation, using anchors.
 * Copyright (c) 2007-2009 Ariel Flesler - aflesler(at)gmail(dot)com | http://flesler.blogspot.com
 * Dual licensed under MIT and GPL.
 * Date: 3/11/2009
 * @author Ariel Flesler
 * @version 1.2.7
 **/
;(function($){var l=location.href.replace(/#.*/,'');var g=$.localScroll=function(a){$('body').localScroll(a)};g.defaults={duration:1e3,axis:'y',event:'click',stop:true,target:window,reset:true};g.hash=function(a){if(location.hash){a=$.extend({},g.defaults,a);a.hash=false;if(a.reset){var e=a.duration;delete a.duration;$(a.target).scrollTo(0,a);a.duration=e}i(0,location,a)}};$.fn.localScroll=function(b){b=$.extend({},g.defaults,b);return b.lazy?this.bind(b.event,function(a){var e=$([a.target,a.target.parentNode]).filter(d)[0];if(e)i(a,e,b)}):this.find('a,area').filter(d).bind(b.event,function(a){i(a,this,b)}).end().end();function d(){return!!this.href&&!!this.hash&&this.href.replace(this.hash,'')==l&&(!b.filter||$(this).is(b.filter))}};function i(a,e,b){var d=e.hash.slice(1),f=document.getElementById(d)||document.getElementsByName(d)[0];if(!f)return;if(a)a.preventDefault();var h=$(b.target);if(b.lock&&h.is(':animated')||b.onBefore&&b.onBefore.call(b,a,f,h)===false)return;if(b.stop)h.stop(true);if(b.hash){var j=f.id==d?'id':'name',k=$('<a> </a>').attr(j,d).css({position:'absolute',top:$(window).scrollTop(),left:$(window).scrollLeft()});f[j]='';$('body').prepend(k);location=e.hash;k.remove();f[j]=d}h.scrollTo(f,b).trigger('notify.serialScroll',[f])}})(jQuery);