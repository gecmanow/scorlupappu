<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter31743326 = new Ya.Metrika({
                    id:31743326,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true
                });
            } catch(e) { }
        });
        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";
        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/31743326" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
<script type="text/javascript">
    $(document).ready(function(){
        var success = $('#modal-success');
        $('body').on('click', 'form .send', function(e) {
            e.preventDefault();
            var form = $(this).closest('form');
            if (FormData)
                var ajax = $.ajax({
                    url: form.attr('action'),
                    type: 'POST',
                    data: new FormData(form[0]),
                    processData: false,
                    contentType: false,
                });
            else
                var ajax = $.post(form.attr('action'), form.serialize());
            ajax.success(function(resp){
                form[0].reset();
                var img = $('div.captcha img');
                img.prop('src', img.prop('src').replace(/\w{4}\.jpg/, resp + '.jpg'));
                form.closest('.modal').modal('hide');
                success.modal('show');
                setTimeout(function() { success.modal('hide'); }, 3000);
            })
                .error(function(resp) {
                    form.closest('.form-container').html(resp.responseText)
                });
        });
        $('#callback').on('hidden.bs.modal', function (e) {
            $(this).removeData('bs.modal');
        });
    });
</script>
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
    ga('create', 'UA-71199509-2', 'auto');
    ga('send', 'pageview');
</script>
