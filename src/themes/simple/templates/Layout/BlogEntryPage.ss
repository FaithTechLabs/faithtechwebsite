<!-- content-section -->
<section class="content-section align-c content-section-common $topClass" id="{$URLSegment}">
    <div class="container about-content">
        <div class="flex-col-md-8 flex-col-md-offset-2">
            <h2 class="orange">$Title</h2>
            <hr class="mr-t-50 mr-b-50">
            <% if $Description %>
                <div class="content intro-text">
                    $Description
                </div>
                <hr class="mr-t-50 mr-b-50">
            <% end_if %>
            <div class="content better-text align-j">
                $Content
            </div>
            <hr class="mr-t-30 mr-b-30 bdr-dark1">
            <h3 class="hd-3">Keep Reading</h3>
            <div class="gt40">
                <div class="col-md-5" style="height: 253px;">
                    <% if $PrevNextPage('prev') %>
                        <a href="$PrevNextPage('prev').Link">
                            <div class="info-box info-box7">
                                <img src="$PrevNextPage('prev').Thumbnail.URL" class="img-responsive blog-thumbs" alt="Image">

                                <div class="info">
                                    <h2 class="hd">$PrevNextPage('prev').Title</h2>

                                    <p class="sub-txt">$PrevNextPage('prev').Content.FirstSentence</p>
                                </div>
                            </div>
                        </a>
                    <% else %>

                    <% end_if %>
                </div>
                <div class="col-md-5">
                    <% if $PrevNextPage('next') %>
                        <a href="$PrevNextPage('next').Link">
                            <div class="info-box info-box7">
                                <img src="$PrevNextPage('next').Thumbnail.URL" class="img-responsive blog-thumbs" alt="Image">

                                <div class="info">
                                    <h2 class="hd">$PrevNextPage('next').Title</h2>

                                    <p class="sub-txt">$PrevNextPage('next').Content.FirstSentence</p>
                                </div>
                            </div>
                        </a>
                    <% else %>

                    <% end_if %>
                </div>
            </div>
        </div>
    </div>
    <!-- /container -->
</section><!-- /content-section -->
