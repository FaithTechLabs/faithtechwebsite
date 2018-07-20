<!-- Content -->
<section id="about" class="content-section align-c content-section-9">

    <div class="container">
        <h2 class="title">$Block1Title</h2>
        <div class="title-sub">$Block1Content</div>

    </div><!-- /.container -->

</section><!-- /.content-section --><!-- Form section -->


<% include JoinMovement %>

<section class="content-section content-section-11">

    <!-- <div class="full-wh bg-section bg-cover w-50" data-bg="images/bg-tannery.jpg"></div> -->

    <div class="container-fluid">

        <div class="row eqh fs-equalize-element">
            <div class="col-md-6 l col-md-push-6 bg-cover bg-cc" data-bg="{$Block2TopImage.URL}" style="background-image: url(&quot;{$Block2TopImage.URL}&quot;); height: 651px;"></div>

            <div class="col-md-6 col-md-pull-6 r" style="height: 651px;">
                <div class="content">
                    <h2 class="title">$Block2TopTitle</h2>
                    <div class="title-sub mr-b-40">$Block2TopContent</div>
                </div><!-- /.content -->
            </div><!-- /.col-lg-5 -->

        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.content-section --><!-- Content -->

<section class="content-section content-section-11">

    <!-- <div class="full-wh bg-section bg-cover w-50" data-bg="images/bg-img6.jpg"></div> -->

    <div class="container-fluid">

        <div class="row eqh fs-equalize-element">
            <div class="col-md-6 l bg-cover bg-cc" data-bg="{$Block2BottomImage.URL}" style="background-image: url(&quot;{$Block2BottomImage.URL}&quot;); height: 651px;"></div>

            <div class="col-md-6 r" style="height: 651px;">
                <div class="content">
                    <h2 class="title">$Block2BottomTitle</h2>
                    <div class="title-sub mr-b-40">$Block2BottomContent</div>
                </div><!-- /.content -->
            </div><!-- /.col-lg-5 -->

        </div><!-- /.row -->

    </div><!-- /.container -->
</section><!-- /.content-section --><!-- Testimonials -->

<section class="testimonial-section dark testimonial-section-3">
    <div class="container-fluid">

        <h2 class="title">$Block3Title</h2>

        <div class="carousel-widget ctrl-1" id="carousel-widget" data-margin="20" data-itemrange="0,1|420,1|600,2|768,2|992,2|1200,2" data-autoplay="false" data-nav="false" data-pager="true" data-center="true">

            <div class="owl-carousel">
                <% loop $getQuotes %>
                    <div class="item">
                        <div class="feedback-box feedback-box3">
                            <i class="quote fa fa-quote-right"></i>
                            <p class="feedback">$Quote<p>
                            <div class="person">
                                <div class="info">
                                    <strong>$Author</strong>
                                    <em>$AuthorDescription</em>
                                </div>
                            </div>
                            <i class="down-arrow fa fa-caret-down"></i>
                        </div>
                    </div>
                <% end_loop %>

            </div> <!-- /.owl-carousel -->

        </div> <!-- /.carousel-widget -->

    </div>
</section> <!-- /.testimonial-section -->