<!-- Footer Contact section -->

<section class="contact-section contact-section-2 dark">
    <div class="container">
        <div class="row">
            <div class="col-md-5 r">
                <div class="content">
                    <img src="{$SiteConfig.Logo.URL}" class="footer-logo" alt="FaithTech">

                    <p class="title-sub mini mr-t-40">Stay in touch</p>


                    <div class="info-box info-box5">
                        <a href="https://{$SiteConfig.Facebook}" target="_blank">
                            <div class="img"><i class="fa fa-facebook-official"></i></div>
                            <div class="info">
                                <h3 class="hd">FaithTech on Facebook</h3>
                            </div>
                        </a>
                    </div>

                    <div class="info-box info-box5">
                        <a href="https://{$SiteConfig.Meetup}" target="_blank">
                            <div class="img"><i class="fa fa-meetup"></i></div>
                            <div class="info">
                                <h3 class="hd">FaithTech on Meetup</h3>
                            </div>
                        </a>
                    </div>

                    <div class="info-box info-box5">
                        <a href="http://{$SiteConfig.Slack}" target="_blank">
                            <div class="img"><i class="fa fa-slack"></i></div>
                            <div class="info">
                                <h3 class="hd">FaithTech on Slack</h3>
                            </div>
                        </a>
                    </div>

                    <div class="info-box info-box5">
                        <a href="https://{$SiteConfig.Instagram}" target="_blank">
                            <div class="img"><i class="fa fa-instagram"></i></div>
                            <div class="info">
                                <h3 class="hd">FaithTech on Instagram</h3>
                            </div>
                        </a>
                    </div>

                </div>
                <!-- /.content -->
            </div>
            <!-- /.col-md-6 -->

            <div class="col-md-6 col-md-offset-1 l">
                <!-- Popup contact form - 1 -->
                <div id="contact-form" class="form-block">
                    <h2 id="contact" class="title small">Contact Us</h2>
                    <% with $ContactForm %>
                        <form $FormAttributes class="form-widget" novalidate="novalidate">
                            <input class="form-control" data-label="Name" required="" data-msg="Please enter name."
                                   type="text" name="Name" placeholder="Enter your name" aria-required="true">
                            <input class="form-control" data-label="Email" required="" data-msg="Please enter email."
                                   type="email" name="Email" placeholder="Enter your email" aria-required="true">
                            <textarea class="form-control" data-label="Message" required=""
                                      data-msg="Please enter your message." name="Message" placeholder="Add your message"
                                      cols="30" rows="10" aria-required="true"></textarea>
                            <button type="submit" class="btn btn-primary"><i class="fa fa-envelope-o"></i> Submit</button>
                            $Fields.dataFieldByName(SecurityID)
                        </form>
                        <!-- / form -->
                    <% end_with %>

                    <div class="msg-block"></div>
                </div>
                <!-- /#popup-contact-form -->
            </div>
            <!-- /.col-md-6 -->


        </div>
        <!-- / row -->

        <hr class="mr-t-40">
        <p class="copyright">FaithTech © $getYear</p>

    </div>
    <!-- / container -->
</section><!-- /Footer Contact-section -->


<!-- /#page -->

<!-- JavaScript -->
<script src="{$ThemeDir}/minify/rgen_min.js"></script>
<script async="" src="{$ThemeDir}/js/rgen.js"></script>
<script src="{$ThemeDir}/lib/Isotope/isotope.pkgd.min.js"></script>
<script src="{$ThemeDir}/js/custom.js"></script>

<script>
    (function (i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function () {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-6484901-61', 'auto');
    ga('send', 'pageview');

</script>
