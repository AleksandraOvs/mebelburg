jQuery(document).ready(function () {
  function loadPosts(tabClick) {
    console.log($('.shops-cat.active').data('term-id'));
    jQuery.ajax({
      url: my_ajax_script.ajax_url,
      type: 'POST',
      dataType: 'json',
      data: {
        action: 'loadPostsFromCategory',
        category_id: $('.shops-cat.active').data('term-id'),
        paged: currentPage,
      },
      success: function (res) {
        if (!tabClick) {
          $('.page-shops__list').append(res.html);
        } else {
          $('.page-shops__list').html(res.html);
        }
        if (currentPage >= res.max) {
          jQuery('#more-shops').hide();
        } else {
          jQuery('#more-shops').show();
        }
      },
    });
    return false;
  }

  let currentPage = 1;
  $(document).on('click', '#more-shops', function (e) {
    e.preventDefault;
    console.log('load');
    currentPage++;
    loadPosts();
  });

  $(document).on('click', '.shops-cat', function () {
    $('.shops-cat').removeClass('active');
    $(this).addClass('active');
    currentPage = 1;
    loadPosts(true);
  });

  button = $('#load-posts a');
  paged = button.data('paged');
  maxPages = button.data('max_pages');

  button.click( function(event){
    event.preventDefault();
    
    $.ajax({

      url: my_ajax_script.ajax_url,
      type: 'POST',
      data: {
        paged: paged,
        action: 'loadmore'
      },
      // beforeSend: function(xhr){
      //     button.text('Загружаю...');
      // },
      success: function(data){
        //alert(data);
        paged++;
        $('.sale-block__list').append(data);
        //button.parent().before( data );
        button.text('Смотреть ещё');

        if (paged >= maxPages) {
          jQuery('#load-posts').hide();
        } else {
          jQuery('#load-posts').show();
        }
      }

    });
  }
);

});