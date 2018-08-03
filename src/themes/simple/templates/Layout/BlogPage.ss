<section class="content-section align-c content-section-9">
    <div class="container">
        <h2 class="title">$ListSubPageTitle</h2>
        $Description
        <hr class="mr-b-40">
        <div class="row eqh gt40 fs-equalize-element">

            <% loop $getBlogEntryPages %>
                <div class="col-md-3" style="height: 253px;">
                    <a href="{$Link}">
                        <div class="info-box info-box7">
                            <img src="{$Thumbnail.URL}" class="img-responsive" alt="Image">

                            <div class="info">
                                <h2 class="hd">$Title</h2>

                            </div>
                        </div>
                    </a>
                </div>
            <% end_loop %>
        </div>
    </div>
</section><!-- /.content-section -->