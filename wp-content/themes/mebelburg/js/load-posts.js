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
          jQuery('#more_shops').hide();
        } else {
          jQuery('#more_shops').show();
        }
      },
    });
    return false;
  }


  function loadNews() {
    //console.log('load news');
    jQuery.ajax({
      url: my_ajax_script.ajax_url,
      type: 'POST',
      dataType: 'json',
      data: {
        action: 'loadNews',
        paged: news_currentPage,
      },
      success: function (res_news) {
      
          $('.post-block__list').append(res_news.html);
       
        if (news_currentPage >= res_news.max) {
          jQuery('#more_news').hide();
        } else {
          jQuery('#more_news').show();
        }
      },
    });
    return false;
  }

  function loadSales() {
    //console.log('load news');
    jQuery.ajax({
      url: my_ajax_script.ajax_url,
      type: 'POST',
      dataType: 'json',
      data: {
        action: 'loadSales',
        paged: sales_currentPage,
      },
      success: function (res_sales) {
      
          $('.sale-block__list').append(res_sales.html);
       
        if (sales_currentPage >= res_sales.max) {
          jQuery('#more_sales').hide();
        } else {
          jQuery('#more_sales').show();
        }
      },
    });
    return false;
  }





  let currentPage = 1;
  $(document).on('click', '#more_shops', function (e) {
    e.preventDefault;
    console.log('load');
    currentPage++;
    loadPosts();
  });

  let news_currentPage = 1;
  $(document).on('click', '#more_news', function (e) {
    e.preventDefault;
    console.log('load news');
    news_currentPage++;
    loadNews();
  });

  let sales_currentPage = 1;
  $(document).on('click', '#more_sales', function (e) {
    e.preventDefault;
    console.log('load sales');
    sales_currentPage++;
    loadSales();
  });

  $(document).on('click', '.shops-cat', function () {
    $('.shops-cat').removeClass('active');
    $(this).addClass('active');
    currentPage = 1;
    loadPosts(true);
  });

  

});