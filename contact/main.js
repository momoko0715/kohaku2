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