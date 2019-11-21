(function($) {
  $restUrl =
    'http://localhost:3000/qod/wp-json/wp/v2/posts?filter[orderby]=rand&filter[posts_per_page]=1';
  $data = '';
  // console.log(api_vars.success);

  $(document).on('click', '.btn-show', function(e) {
    $.ajax({
      type: 'GET',
      url:
        'http://localhost:3000/qod/wp-json/wp/v2/posts?filter[orderby]=rand&filter[posts_per_page]=1',
      data: 'data',
      dataType: 'JSON',
      success: function(response) {}
    })
      .done(function(data) {
        console.clear();
        $data = data;
        console.log($data[0]['content']);
        window.location.href = window.location.href + $data[0]['slug'];
      })
      .fail(function(e) {
        console.log('ERROR :');
      });
  });
})(jQuery);
