$('.video-button').click(function(){
  $('.video-holder').parent().html('<div class="flex-video widescreen"><iframe src="https://www.youtube.com/embed/'+$(this).data('videoid')+'?rel=0&amp;showinfo=0&autoplay=1&color=white" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe></div>');
  $('.hero').css("height", "inherit");
});
