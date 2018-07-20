<section class="content-section content-section-common $topClass" id="{$URLSegment}">
    <div class="container about-content">
        <h2 class="title">$Title</h2>
        <hr class="mr-b-40">

        <div class="flex-col-md-8 flex-col-md-offset-2">
            <div class="content better-text">
                $Content
            </div>
            <% if $getAllGroups %>
                <div class="flex-col-md-8 flex-col-md-offset-2">
                    <div class="people-listing">
                        <% loop $getAllGroups %>
                            <div class="row">
                                <h2 class="title">$Title</h2>
                                <hr class="mr-b-40">
        
                                <% loop $People %>
                                    <div class="col-sm-4">
                                        <img src="$Image.URL" class="rd img-responsive" alt="$MenuTitle">
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="content intro-text">
                                            <h3 class="title">$Title</h3>
                                            <p class="orange">$Description    <a class="readmore" href="$Link">read more</a>
                                            </p>
                                        </div>
                                    </div>
                                <% end_loop %>
                            </div><!-- /row -->
                            <hr class="mr-b-40">
                        <% end_loop %>
                    </div>            
                </div>
            <% end_if %>
        </div>
    </div><!-- /container -->
</section><!-- /content-section -->