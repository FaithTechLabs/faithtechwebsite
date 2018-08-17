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

    <div>
        <%--$getEventbriteEvents()--%>
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
