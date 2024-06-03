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
});
