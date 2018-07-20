<section class="content-section align-c content-section-9" id="resources">
    <div class="container z1">
        <h2 class="title $SubTitleColor">$SubTitle</h2>
        $Description
        <div class="container filter-widget filter-style1 filterwidget1" id="filterwidget1" style="opacity: 1;">
            <div class="filter-list">
                <a class="active" data-filter="*">All</a>
                <% loop $getResourceCategories %>
                    <a data-filter=".$URLSegment">$Title</a>
                <% end_loop %>
            </div>
        </div>
        <!-- /filter widget -->

        <div class="row eqh gt40 fs-equalize-element grid">
            <% loop $Resources %>
                <% if $LinkType == 'in' %>
                    <div class="col-md-4 col-sm-6 element-item $cat2class" style="min-height: 488px;">
                        <div class="info-box info-box8">
                            <div class="img"><a href="$ExternalBlog.Link"><img src="$ExternalBlog.Thumbnail.URL"
                                                                                  class="img-responsive"
                                                                                  alt="Shaping a Digital World"></a>
                            </div>
                            <div class="info">
                                <h2 class="hd"><a href="$ExternalBlog.Link">$ExternalBlog.Title</a></h2>

                                <p class="sub-txt"><% if $Description %>$ExternalBlog.Description.Summary(50)<% else %>$ExternalBlog.Content.Summary(50)<% end_if %></p>
                                <a href="$ExternalBlog.Link" class="btn btn-default btn-xs ">More info</a>
                            </div>
                        </div>
                    </div>
                <% else %>
                    <div class="col-md-4 col-sm-6 element-item $cat2class" style="min-height: 488px;">
                        <div class="info-box info-box8">
                            <div class="img"><a href="$Link" target="_blank"><img src="$Image.URL"
                                                                                  class="img-responsive"
                                                                                  alt="Shaping a Digital World"></a>
                            </div>
                            <div class="info">
                                <h2 class="hd"><a href="$Link" target="_blank">$Title</a></h2>

                                <p class="sub-txt">$Description</p>
                                <a href="$Link" target="_blank" class="btn btn-default btn-xs ">More info <i
                                        class="fa fa-external-link" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                <% end_if %>
            <% end_loop %>
        </div>
    </div>
    <!-- /.container -->
</section><!-- /.content-section -->
