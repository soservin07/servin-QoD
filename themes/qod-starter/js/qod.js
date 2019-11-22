(function($) {
  $restUrl =
    window.location.origin +
    '/qod/wp-json/wp/v2/posts?filter[orderby]=rand&filter[posts_per_page]=1';
  $data = '';
  // console.log($restUrl);
  let $site_title = jQuery(location).attr('href');
  $site_title = $site_title.replace(window.location.origin + '/qod/', '');
  $site_title = $site_title.replace('/', '');
  if ($site_title != 'about-us') {
    do_ajax();
  } else if ($site_title != 'archives') {
    do_ajax();
  }
  $(document).on('click', '.btn-show', function(e) {
    // console.log($restUrl);
    window.location.href = window.location.href + $data[0]['slug'];
  });
})(jQuery);

function do_ajax() {
  $.ajax({
    type: 'GET',
    url: $restUrl,
    data: 'data',
    dataType: 'JSON',
    success: function(response) {}
  })
    .done(function(data) {
      // console.clear();
      $data = data;
      // console.log($data[0]);
      console.log($data[0]['content']['rendered']);
      // console.log($data[0]['_qod_quote_source']);
      $('.p-source').prepend($data[0]['title']['rendered']);
      $('.link-source')
        .text($data[0]['_qod_quote_source'])
        .attr('href', $data[0]['_qod_quote_source_url']);
      $('.entry-content').prepend($data[0]['content']['rendered']);
    })
    .fail(function(e) {
      console.log('ERROR :');
    });
}
