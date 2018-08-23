<section class="content-section align-c content-section-9" id="upcoming">
    <div class="container z1">
        <h2 class="title $SubTitleColor">$Title</h2>
        <div class="container filter-widget filter-style1 filterwidget1" id="filterwidget1" style="opacity: 1;">
            <div class="filter-list">
                <a class="active" data-filter="*">All</a>
                <% loop $getEventCategories %>
                    <a data-filter=".$URLSegment">$Title</a>
                <% end_loop %>
            </div>
        </div>
        <!-- /filter widget -->

        <div class="row eqh gt40 fs-equalize-element grid">
            <% loop $Events %>
                <div class="col-md-4 col-sm-6 element-item $cat2class" style="min-height: 488px;">
                    <div class="info-box info-box8">
                        <div class="img"><a href="$Link" target="_blank"><img src="$Image.URL"
                                                                              class="img-responsive"
                                                                              alt="Shaping a Digital World"></a>
                        </div>
                        <div class="info">
                            <h3 class="hd-3"><a href="$Link" target="_blank">$Title</a></h3>
                            <h4 class="hd">$Date.Long</h4>
                            <p class="sub-txt">$Description</p>
                            <a href="$Link" target="_blank" class="btn btn-default btn-xs ">More info <i
                                    class="fa fa-external-link" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            <% end_loop %>
        </div>
    </div>
    <!-- /.container -->
</section>

<!-- content-section -->
<section class="content-section content-section-common $topClass" id="{$URLSegment}">
    <div class="container about-content">
        <div class="flex-col-md-8 flex-col-md-offset-2">
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



<% if $getEventGalleryPages %>
    <section class="content-section align-c content-section-9">
        <div class="container">
            <h2 class="title">Faithtech Event Gallery</h2>
            <hr class="mr-b-40">
            <div class="row eqh gt40 fs-equalize-element">
                <% loop $getEventGalleryPages %>
                    <div class="col-md-3 col-sm-6" style="height: 253px;">
                        <a href="{$Link}">
                            <div class="info-box info-box7">
                                <img src="{$Thumbnail.CroppedImage(510,320).URL}" class="img-responsive" alt="Image">

                                <div class="info">
                                    <h2 class="hd">$Title</h2>

                                    <p class="sub-txt">$SubTitle</p>
                                </div>
                            </div>
                        </a>
                    </div>
                <% end_loop %>
            </div>
        </div>
    </section><!-- /.content-section -->
<% end_if %>
