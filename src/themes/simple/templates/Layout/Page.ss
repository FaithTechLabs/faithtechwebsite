<!-- content-section -->
<section class="content-section content-section-common $topClass" id="{$URLSegment}">
    <div class="container about-content">
        <div class="flex-col-md-8 flex-col-md-offset-2">
            <% if $URLSegment == 'Security' %>
                $Form
            <% else %>
                <% if $Description %>
                    <div class="content intro-text">
                        $Description
                    </div>
                    <hr class="mr-t-50 mr-b-50">
                <% end_if %>
                <div class="content better-text">
                    $Content
                </div>
            <% end_if %>
        </div>
    </div><!-- /container -->
</section><!-- /content-section -->