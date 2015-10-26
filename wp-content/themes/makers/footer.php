<footer>
    <a href="javascript:void(0)" class="scroll-to-top">Up</a>
    <h4>Learn more about us</h4>
    <ul class="social">
        <li class="facebook"><a href="http://www.facebook.com/makers.do" target="_blank">Facebook</a></li>
        <li class="linkedin"><a href="http://www.linkedin.com" target="_blank">LinkedIn</a></li>
        <li class="twitter"><a href="http://twitter.com/MakersDo" target="_blank">Twitter</a></li>
        <li class="medium"><a href="http://www.medium.com" target="_blank">Medium</a></li>
        <li class="pinterest"><a href="http://www.pinterest.com" target="_blank">Pinterest</a></li>
        <li class="angellist"><a href="https://angel.co/" target="_blank">AngelList</a></li>
    </ul>
    <div class="newsletter signup">
        <input type="email" class="email" placeholder="Sign up for our newsletter">
        <input type="submit" class="submit" value="Sign up">
    </div>
    <nav>
        <ul>
            <li><a href="<?php bloginfo('url') ?>/about/">About</a></li>
            <li><a href="<?php bloginfo('url') ?>/about-culture/">Culture</a></li>
            <li><a href="<?php bloginfo('url') ?>/about-team/">Team</a></li>
            <li><a href="<?php bloginfo('url') ?>/about-process/">Process</a></li>
            <li><a href="<?php bloginfo('url') ?>/companies/">Companies</a></li>
            <li><a href="<?php bloginfo('url') ?>/blog/">Blog</a></li>
            <li><a href="<?php bloginfo('url') ?>/join-us/">Join us</a></li>
            <li><a href="<?php bloginfo('url') ?>/join-us-investor/">Investor</a></li>
            <li><a href="<?php bloginfo('url') ?>/join-us-founder/">Founder</a></li>
            <li><a href="<?php bloginfo('url') ?>/join-us-career/">Career</a></li>
            <li><a href="<?php bloginfo('url') ?>/labs/">Labs</a></li>
            <li><a href="<?php bloginfo('url') ?>/makers/">Makers</a></li>
            <li><a href="<?php bloginfo('url') ?>/imprint/">Imprint</a></li>
        </ul>
    </nav>
</footer>

<script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/main.js"></script>
<script type="text/javascript">
    $(function () {
        $('.signup .submit').click(function () {
            var email = $(this).parent('.signup').find('.email');
            $.ajax({
                dataType: "json",
                url: "<?php bloginfo('url') ?>/mailchimp/subscribe.php",
                data: {
                    "email": $(email).val(),
                    "list_id": "6dc40f9c5d"
                },
                success: function (response) {
                    if(response.success){
                        $(email).val('');
                    }
                    var n = noty({
                        text: response.message,
                        timeout: 6000,
                        layout: 'center',
                        type: response.success ? "success" : "error"
                    });
                }
            });
        });
    });
</script>
<script>
    (function (b, o, i, l, e, r) {
        b.GoogleAnalyticsObject = l;
        b[l] || (b[l] =
            function () {
                (b[l].q = b[l].q || []).push(arguments)
            });
        b[l].l = +new Date;
        e = o.createElement(i);
        r = o.getElementsByTagName(i)[0];
        e.src = '//www.google-analytics.com/analytics.js';
        r.parentNode.insertBefore(e, r)
    }(window, document, 'script', 'ga'));
    ga('create', 'UA-XXXXX-X', 'auto');
    ga('send', 'pageview');
</script>
<script type='text/javascript'>
    (function (d, s, c) {
        if (window._jobscore_loader) {
            return;
        } else {
            window._jobscore_loader = true;
        }
        var o = d.createElement(s);
        o.type = 'text/javascript';
        o.async = true;
        var sc = d.getElementsByTagName(s)[0];
        sc.parentNode.insertBefore(o, sc);
        o.src = ('https:' == d.location.protocol ? 'https:' : 'http:') + '//widgets.jobscore.com/jobs/' + c + '/widget.js';
    })(document, 'script', 'makersdo');
</script>
</body>
</html>