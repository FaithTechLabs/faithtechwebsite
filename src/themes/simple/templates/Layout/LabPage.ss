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
                <p>$MiddleTitle</p>

                <div class="row eqh gt40 fs-equalize-element mr-t-60">

                    <div class="col-md-4" style="height: 253px;">
                        <div class="info-box info-box6">
                            <div class="img"><i class="fa fa-frown-o"></i></div>
                            <div class="info">
                                <h2 class="hd orange">$MiddleBox1</h2>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4" style="height: 253px;">
                        <div class="info-box info-box6">
                            <div class="img"><i class="fa fa-plus-square-o"></i></div>
                            <div class="info">
                                <h2 class="hd orange">$MiddleBox2</h2>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4" style="height: 253px;">
                        <div class="info-box info-box6">
                            <div class="img"><i class="fa fa-users"></i></div>
                            <div class="info">
                                <h2 class="hd orange">$MiddleBox3</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="mr-t-40 mr-b-40">
                $BottomContent
            </div>
        </div>
    </div>
    <!-- /container -->
</section><!-- /content-section -->
<section class="content-section align-c content-section-9">
    <div class="container">
        <h2 class="title">$ProjectsTitle</h2>
        <hr class="mr-b-40">
        <div class="row eqh gt40 fs-equalize-element">

            <% loop $Projects %>
                <div class="col-md-3" style="height: 253px;">
                    <a href="{$Link}" target="_blank">
                        <div class="info-box info-box7">
                            <img src="{$Image.URL}" class="img-responsive" alt="$Title">

                            <div class="info">
                                <h2 class="hd">$Title</h2>

                                <p class="sub-txt">$Description</p>
                            </div>
                        </div>
                    </a>
                </div>
            <% end_loop %>
        </div>
    </div>
</section><!-- /.content-section -->