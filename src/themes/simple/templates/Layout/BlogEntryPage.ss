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
            <hr class="mr-t-30 mr-b-30">
            <a href="$PrevNextPage('prev').Link">Previous</a>
            <a href="$PrevNextPage('next').Link">Next</a>
        </div>
    </div>
    <!-- /container -->
</section><!-- /content-section -->
