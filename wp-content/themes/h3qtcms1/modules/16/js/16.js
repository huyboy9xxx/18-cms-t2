$(document).ready(function() {
    var showChar = 157;
    var ellipsestext = "";
    var moretext = "more";
    var lesstext = "less";

    $('.more').each(function() {
        var content = $(this).html();
 
        if(content.length > showChar) {
 
            var c = content.substr(0, showChar);
            var h = content.substr(showChar, content.length - showChar);
 
            var html = c + '<span class="moreellipses">' + ellipsestext+ '&nbsp;</span><span class="morecontent"><span>' + h + '</span>&nbsp;<a href="" class="morelink">' + moretext + '</a></span>';
 
            $(this).html(html);
        }
 
    });
 
    $(".morelink").click(function(){
        if($(this).hasClass("less")) {
            $(this).removeClass("less");
            $(this).html(moretext);
        } else {
            $(this).addClass("less");
            $(this).html(lesstext);
        }
        $(this).parent().prev().toggle();
        $(this).prev().toggle();
        return false;
    });

    //swiper

   
});
 //Rules of input number
$(function () {
'use strict';
$.fn.handleCounter = function (options) {
    var $input,
        $btnMinus,
        $btnPlugs,
        minimum,
        maximize,
        writable,
        onChange,
        onMinimum,
        onMaximize;
    var $handleCounter = this;
    $btnMinus = $handleCounter.find('.counter-minus');
    $input = $handleCounter.find('input');
    $btnPlugs = $handleCounter.find('.counter-plus');
    var defaultOpts = {
        writable: true,
        minimum: 1,
        maximize: null,
        onChange: function(){},
        onMinimum: function(){},
        onMaximize: function(){}
    };
    var settings = $.extend({}, defaultOpts, options);
    minimum = settings.minimum;
    maximize = settings.maximize;
    writable = settings.writable;
    onChange = settings.onChange;
    onMinimum = settings.onMinimum;
    onMaximize = settings.onMaximize;
    if (!$.isNumeric(minimum)) {
        minimum = defaultOpts.minimum;
    }
    if (!$.isNumeric(maximize)) {
        maximize = defaultOpts.maximize;
    }
    var inputVal = $input.val();
    if (isNaN(parseInt(inputVal))) {
        inputVal = $input.val(0).val();
    }
    if (!writable) {
        $input.prop('disabled', true);
    }

    changeVal(inputVal);
    $input.val(inputVal);
    $btnMinus.click(function () {
        var num = parseInt($input.val());
        if (num > minimum) {
            $input.val(num - 1);
            changeVal(num - 1);
        }
    })
    $btnPlugs.click(function () {
        var num = parseInt($input.val());
        if (maximize == null||num < maximize) {
            $input.val(num + 1);
            changeVal(num + 1);
        }
    });
    var keyUpTime;
    $input.keyup(function () {
        clearTimeout(keyUpTime);
        keyUpTime = setTimeout(function() {
            var num = $input.val();
            if (num == ''){
                num = minimum;
                $input.val(minimum);
            }
            var reg = new RegExp("^[\\d]*$")
            if (isNaN(parseInt(num)) || !reg.test(num)) {
                $input.val($input.data('num'));
                changeVal($input.data('num'));
            } else if (num < minimum) {
                $input.val(minimum);
                changeVal(minimum);
            }else if (maximize!=null&&num > maximize) {
                $input.val(maximize);
                changeVal(maximize);
            } else {
                changeVal(num);
            }
        },300);
    })
    $input.focus(function () {
        var num = $input.val();
        if (num == 0) $input.select();
    });

    function changeVal(num) {
        $input.data('num', num);
        $btnMinus.prop('disabled', false);
        $btnPlugs.prop('disabled', false);
        if (num <= minimum) {
            $btnMinus.prop('disabled', true);
            onMinimum.call(this, num)
        } else if (maximize!=null&&num >= maximize) {
            $btnPlugs.prop('disabled', true);
            onMaximize.call(this, num);
        }
        onChange.call(this, num);
    }
    return $handleCounter;
    };
});
$(function ($) {
    var options = {
        minimum: 1,
        maximize: 10,
        onChange: valChanged,
        onMinimum: function(e) {
            // console.log('reached minimum: '+e);
        },
        onMaximize: function(e) {
            // console.log('reached maximize'+e);
        }
    }
    $('#handleCounter').handleCounter({maximize: 100});
});
function valChanged(d) {
//            console.log(d)
}

var galleryThumbs = new Swiper('.gallery-thumbs', {
      spaceBetween: 10,
      slidesPerView: 4,
      // loop: true,
      freeMode: true,
      loopedSlides: 5, //looped slides should be the same
      watchSlidesVisibility: true,
      watchSlidesProgress: true
    });
    var galleryTop = new Swiper('.gallery-top', {
      spaceBetween: 10,
      loop:true,
      loopedSlides: 5, //looped slides should be the same
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev'
      },
      thumbs: {
        swiper: galleryThumbs
      }
    });
    //star
var $star_rating = $('.star-rating .fa');

var SetRatingStar = function() {
  return $star_rating.each(function() {
    if (parseInt($star_rating.siblings('input.rating-value').val()) >= parseInt($(this).data('rating'))) {
      return $(this).removeClass('fa-star-o').addClass('fa-star');
    } else {
      return $(this).removeClass('fa-star').addClass('fa-star-o');
    }
  });
};

$star_rating.click( function() {
  $star_rating.siblings('input.rating-value').val($(this).data('rating'));
  return SetRatingStar();
});

SetRatingStar();
