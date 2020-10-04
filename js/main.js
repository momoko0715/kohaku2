$('.slider').slick({
  arrows: false,
  dots: true,
  autoplay: true,
  autoplaySpeed: 1500,
  speed: 1500,
  fade: true,
  pauseOnFocus: false,
  pauseOnHover: false,
  pauseOnDotsHover: false,
});

$(function() {
  $('#open').click(function() {
    $('#top').toggleClass("open");
  });
});

$(function() {
  $('#close').click(function() {
    $('#top').removeClass("open");
  })
});

$(function() {
  $('#open').click(function() {
    $('#menu').toggleClass("open");
  })
});

$(function() {
  $('#close').click(function() {
    $('#menu').removeClass("open");
  })
});

// フェードイン
$(function() {
	$('body').fadeIn(1000);
});