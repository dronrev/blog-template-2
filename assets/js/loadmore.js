$(document).ready(function() {
    var page = 1;
    $('.load-more-btn').on('click',function(e){
        console.log('test')
        page++;
        e.preventDefault();
        $.ajax({
            type : 'POST',
            url : './wp-admin/admin-ajax.php',
            dataType : 'html',
            data: {
                action : 'load_more_posts',
                paged : page,
                page : page
            },
            success: function(res){
                $('.article-content-box').append(res);
                console.log('ok')
            }
        })
    })
});