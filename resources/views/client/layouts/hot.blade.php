

<script>
   $.extend({
        getData: function (url) {
            var result = null;
            $.ajax({
                headers:{
                    'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
                },
                url: url,
                type: 'post',
                dataType: 'json',
                async: false,
                success: function(data) {
                    result = data;
                }
            });
            return result;
        }
    });
    var data  = JSON.parse($.getData('/hotnews'));
  
    data.forEach(element => {
        var str = '';
        str = '<div class="single-blog-post small-featured-post d-flex"><div class="post-thumb"><a href="/tintuc/'
            + element.id + '"><img src="/upload/tintuc/'
            + element.Hinh + '" alt=""></a></div><div class="post-data"><div class="post-meta"> <a href="/tintuc/'
            + element.id + '" class="post-title"><h6>'
            + element.TieuDe+'</h6></a><span>view: ' + element.SoLuotXem + '&emsp;&emsp;&emsp; </span> <span class="post-date">&emsp; &emsp; &emsp;&emsp;'+ element.created_at.substr(0,10) + '</span> </div> </div> </div>';
        $('#hotnew').append(str);
        });
</script>