

(function($) {


  let $restUrl, $data;
  let $site_title;



  $restUrl =
    api_vars.rest_url +
    'wp/v2/posts?filter[orderby]=rand&filter[posts_per_page]=1';
  // if (window.location.href == api_vars.home_url + '/') {
  // } else {
  // }
 
  $site_title = jQuery(location).attr('href');
  $site_title = $site_title.replace(api_vars.home_url + '/', '');
  $site_title = $site_title.replace('/', '');

  switch ($site_title) {
    case 'about-us':
      // doajax();
      break;
    case 'archives':
      // doajax();
      break;
      case 'submit':
        checkUser();
        checkNull('.quote-submit :input');
      break;
    default:
      doajax();
  }

  $(document).on('click', '.btn-show', function(e) {
    // doajax();
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
        window.location.replace(api_vars.home_url + '/' + $data[0]['slug']);
        // $('.site-main').append('<img src="'+api_vars.home_url+'/wp-content/uploads/2019/11/qod-logo.svg" alt="quotes on dev"></img>');
        // console.log();
      })
      .fail(function(e) {
        console.log('ERROR : ' + e);
      });
    console.log(api_vars.home_url + '/' + $data[0]['slug']);
  });
  $(document).on('click', '.btn-submit', function(e) {
    console.log('have been clicked!');
    e.preventDefault();
    postQuote();
    
  });

  $(document).on('click', '.img-quote', function(e) {
    // console.log('workd!');
    window.location.replace(api_vars.home_url);
    e.preventDefault();
  });

  function doajax() {
    $.ajax({
      type: 'GET',
      url: $restUrl,
      data: 'data',
      dataType: 'JSON',
      success: function(response) {}
    })
      .done(function(data) {
        // console.clear();
        // $('.entry-content p').val('');
        $data = data;
        // console.log($data[0]);
        // console.log($data[0]['content']['rendered']);
        // console.log($data[0]['_qod_quote_source']);
        $('.p-source').prepend('--' + $data[0]['title']['rendered']);
        $('.link-source')
          .text(', ' + $data[0]['_qod_quote_source'])
          .attr('href', $data[0]['_qod_quote_source_url']);
        $('.entry-content').prepend($data[0]['content']['rendered']);
      })
      .fail(function(e) {
        console.log('ERROR : ' + e);
      });
  }

  function checkUser(){
    let $tmpBool=document.querySelector('body').classList.contains('admin-bar');

    // alert($tmpBool);
    if(!$tmpBool){
      $('.entry-content').css({display:'none'});
      $('.login-required').css({display:'block'});
      // alert($('body').hasClass('admin-bar'));


      return;
    }
    $('.entry-content').css({display:'block'});
    $('.login-required').css({display:'none'});
    
      // alert($('body').hasClass('admin-bar'));
  }
  function checkNull($form){
    $(document).on('blur',$form,function(e){
      if($(this).attr('class')=='txt-url' ||  $(this).attr('class')=='txt-where' ){
        return;
      }
      $txtbox=$.trim( $(this).val());
      if($txtbox.length==0|| $txtbox==null || $txtbox==''){
        $(this).siblings().remove('.input-after');
        $(this)
        .parent().append('<p class="input-after">* Please fill-up the text above, and dont just leave a blank space</p>');
        
      }
      else{
        $(this).siblings().remove('.input-after');
      }
       e.preventDefault();
    });
  }

  function postQuote(){
    $.ajax({
      method: 'post',
      url: api_vars.rest_url + 'wp/v2/posts/',
      data: {
         title: 'test-title',
         content:'test content',
         post_stauts:'publish',
         _qod_quote_source:'test-source',
         _qod_quote_source_url:'test-source-url.com'
      },
      beforeSend: function(xhr) {
         xhr.setRequestHeader( 'X-WP-Nonce', red_vars.wpapi_nonce );
      }
   }).done( function(response) {
      alert('Success! Comments are closed for this post.');
   });
  }
})(jQuery);
