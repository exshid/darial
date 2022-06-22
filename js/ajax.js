jQuery(function latestPosts($) {
    $(`.btn-load-more`).click(function (e) {
        e.preventDefault();
        var button = $(this),
            data = {
                'action': 'loadmore',
                'limit': limit,
                'page': page,
                'type': type,
                'category': category
            };

        $.ajax({
            url: loadmore_params.ajaxurl,
            data: data,
            type: 'POST',
            beforeSend: function (xhr) {
                button.html('<div class="spinner-border otherspinner"></div>Loading...');
            },
            success: function (data) {
                if (data) {
                    $(`.latest_posts_wrapper`).append(data);
                    page++;
                    button.text('More Articles');
                    if (page == max_pages_latest)
                        button.remove();
                } else {
                    button.remove();
                }
            }
        });
    });

});
