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
<!-- Portfolio section -->
<% if $GalleryItems %>
<section class="portfolio-section portfolio-section-2 bg-white" id="events">
    <div class="container">
        <div class="w-75 mr-auto">
            <p class="title-sub"></p>
        </div>
        <ul class="rw eq3 mb10 gt10 popgallery-widget popgallery1" id="popgallery1">
            <% loop $GalleryItems %>
            <li class="cl">
                <div class="portfolio-box portfolio-box1">
                    <div class="overlay">
                        <a href="{$Image.URL}" title="This is title of image" class="pop-img"><i class="fa fa-search"></i></a>
                        <a href="{$Link}" class="pop-link" target="_blank"><i class="fa fa-link"></i></a>
                        <div class="caption">
                            <h3 class="hd">{$Title}</h3>
                            <p class="txt">{$Description}</p>
                        </div>
                    </div><!-- /.overlay -->
                    <img src="{$Image.URL}" alt="image">
                </div><!-- /.portfolio-box -->

            </li><!-- /.cl -->
            <% end_loop %>
        </ul><!-- /.rw -->

    </div>
</section><!-- / Portfolio section -->
<% end_if %>