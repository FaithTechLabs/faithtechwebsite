<!-- content-section -->
<section class="content-section align-c content-section-common $topClass" id="{$URLSegment}">
    <div class="container about-content">
        <div class="flex-col-md-8 flex-col-md-offset-2">
            <h2 class="orange">$Title</h2>
            <p class="better-text">$Author</p>
            <hr class="mr-t-5 mr-b-50">
            <% if $Header %>
                <div class="content intro-text">
                    $Header
                </div>
                <hr class="mr-t-50 mr-b-50">
            <% end_if %>
            <div class="content better-text align-j">
                $Content
                <div class="info-box9">
                    <h4>Share This Post: </h4>
                    <div class="img social">
                        <a href="https://www.facebook.com/sharer.php?u=$AbsoluteLink" target="_blank">
                            <i class="fa fa-facebook-official"></i>
                        </a>
                        <a href="https://www.twitter.com/share?url=$AbsoluteLink" target="_blank">
                            <i class="fa fa-twitter-square"></i>
                        </a>
                    </div>
                </div>
            </div>
            <% if $ShowKeepReading %>
                <hr class="mr-t-10 mr-b-30 bdr-dark1">
                <h3 class="hd-3">Keep Reading</h3>
                <div class="gt40">
                    <% if $PrevNextPage('prev') && $PrevNextPage('prev').Active %>
                        <div class="col-md-5">
                            <a href="$PrevNextPage('prev').Link">
                                <div class="info-box info-box7">
                                    <img src="$PrevNextPage('prev').Thumbnail.URL" class="img-responsive blog-thumbs" alt="Image">

                                    <div class="info">
                                        <h2 class="hd">$PrevNextPage('prev').Title</h2>

                                        <p class="sub-txt">$PrevNextPage('prev').Content.FirstSentence</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <% end_if %>
                    <% if $PrevNextPage('next') && $PrevNextPage('next').Active %>
                        <div class="col-md-5">
                            <a href="$PrevNextPage('next').Link">
                                <div class="info-box info-box7">
                                    <img src="$PrevNextPage('next').Thumbnail.URL" class="img-responsive blog-thumbs" alt="Image">

                                    <div class="info">
                                        <h2 class="hd">$PrevNextPage('next').Title</h2>

                                        <p class="sub-txt">$PrevNextPage('next').Content.FirstSentence</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <% end_if %>
                </div>
            <% end_if %>
            <div class="col-md-12">
                <hr class="mr-t-10 mr-b-30 bdr-dark2">
                <a href="{$Parent.Link}"><h3>Back To Institute Main Page</h3></a>
            </div>

        </div>
    </div>
    <!-- /container -->
</section><!-- /content-section -->
