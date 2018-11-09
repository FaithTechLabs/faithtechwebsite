<section class="content-section align-c content-section-9" id="job-board">
    <div class="container z1">
        <h2 class="title">$Title</h2>
        $Description

        <!-- filter widget -->
        <div class="container filter-widget filter-style1 filterwidget1" id="filterwidget1" style="opacity: 1;">
            <div class="filter-list">
                <a class="active" data-filter="*">All</a>
                <% loop $getJobLocations %>
                    <a data-filter=".$URLSegment">$Title</a>
                <% end_loop %>
            </div>
        </div>
        <!-- /filter widget -->
            <div class="row eqh gt40 fs-equalize-element grid">
                <% loop $Children %>
                    <div class="col-md-4 element-item $loc2class($Location)" style="height: 253px;">
                            <div class="info-box info-box7">
                                <a href="$Link">
                                    <div class="info product-box1">
                                        <h2 class="hd-2">$Title</h2>
                                        <h3 class="hd-3">$Company</h3>
                                        <h3 class="hd-4">$LocationName($Location)</h3>

                                        <p class="sub-txt">
                                            <% if $Teaser %>
                                            $Teaser
                                            <% else %>
                                            $Description.FirstSentence
                                            <% end_if %>
                                            <br><br>
                                            <b> Deadline: </b> $Date.Long
                                        </p>
                                    </div>
                                </a>
                            </div>
                    </div>
                <% end_loop %>
            </div>   
    </div>
</section>