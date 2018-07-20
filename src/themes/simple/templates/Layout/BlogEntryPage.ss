<!-- content-section -->
<section class="content-section content-section-common $topClass" id="{$URLSegment}">
    <div class="container about-content">
        <div class="flex-col-md-8 flex-col-md-offset-2">
            <h2 class="orange">$Title</h2>
            $Thumbnail
            <hr class="mr-t-50 mr-b-50">
            <% if $Description %>
                <div class="content intro-text">
                    $Description
                </div>
                <hr class="mr-t-50 mr-b-50">
            <% end_if %>
            <div class="content better-text">
                $Content
            </div>
        </div>
    </div>
    <!-- /container -->
</section><!-- /content-section -->
