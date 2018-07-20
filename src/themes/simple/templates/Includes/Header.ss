<!-- Navigation -->
<nav class="nav-wrp nav-3 dark" data-glass="y" data-sticky="y">
    <div class="container bdr-b">

        <div class="nav-header">
            <a class="navbar-brand" href="./">$SiteConfig.Logo</a>
            <a class="nav-handle fs-touch-element" data-nav=".nav"><i class="fa fa-bars"></i></a>
        </div>

        <div class="nav vm-item">
            <ul class="nav-links sf-menu sf-js-enabled sf-arrows">
                <% loop Menu(1) %>
                    <% if $Children %>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                               aria-haspopup="true" aria-expanded="false">$MenuTitle<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <% loop $Children %>
                                    <!-- <% if $Top.checkMenuPos($Pos) %>
                                        <li role="separator" class="divider"></li>
                                    <% end_if %> -->
                                    <li><a href="$Link">$MenuTitle</a></li>
                                <% end_loop %>
                            </ul>
                        </li>
                    <% else %>
                        <li><a href="$Link">$MenuTitle</a></li>
                    <% end_if %>
                <% end_loop %>
                <li><a href="$AbsoluteLink#contact">Contact</a></li>
                <li><span><a href="$AbsoluteLink#movement" class="btn btn-light btn-sm">Join the Movement</a></span></li>
            </ul>

        </div>
        <!-- /.nav -->

    </div>
    <!-- /.container -->
</nav><!-- Navigation -->

<% if $ClassName == 'HomePage' %>
    <section class="intro-section intro-section-25" data-fullwh="y">

        <!-- Caption container -->
        <div class="container vh100 flex-cl">
            <div class="caption">
                <h1>$TopTitle</h1>

                <div class="title-sub">$TopDescription</div>
            </div>
        </div>
        <!-- /.Caption container -->


        <div class="info-wrp">
            <div class="container">
                <div class="flex-row gt0">

                    <!-- flex-column -->
                    <div class="flex-col-md-4">
                        <!-- info-box -->
                        <a href="$EventsLinkedPage.Link">
                        <div class="info-box info-box7">
                            <div class="img"><i class="icon-calendar"></i></div>
                            <div class="info">
                                <h2 class="hd">$TopEventTitle</h2>
                                <p class="sub-txt">$TopEventDescription</p>
                            </div>
                        </div>
                        </a>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.flex-column -->

                    <!-- flex-column -->
                    <div class="flex-col-md-4">
                        <!-- info-box -->
                        <a href="$LabsLinkedPage.Link">
                        <div class="info-box info-box7">
                            <div class="img"><i class="icon-beaker"></i></div>
                            <div class="info">
                                <h2 class="hd">$TopLabTitle</h2>
                                <p class="sub-txt">$TopLabDescription</p>
                            </div>
                        </div>
                        </a>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.flex-column -->

                    <!-- flex-column -->
                    <div class="flex-col-md-4">
                        <!-- info-box -->
                        <a href="$WorkLinkedPage.Link">
                        <div class="info-box info-box7">
                            <div class="img"><i class="icon-briefcase"></i></div>
                            <div class="info">
                                <h2 class="hd">$TopWorkTitle</h2>

                                <p class="sub-txt">$TopWorkDescription</p>
                            </div>
                        </div>
                        </a>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.flex-column -->

                </div>
                <!-- /.flex-row -->
            </div>
        </div>
        <!-- /.info-wrp -->
        <!-- Background image -->

        <div class="bg-section full-wh bg-cover bg-cc" data-bg="{$TopBackground.URL}"></div>

    </section><!-- /.intro-section -->
<% else %>
    <!-- Header -->
    <header class="pghead-section pghead-section3">
        <% if $Banner %>
            <div class="bg-section full-wh bg-cc bg-cover" data-bg="$Banner.URL"></div>
        <% else %>
            <div class="bg-section full-wh bg-cc bg-cover" data-bg="{$ThemeDir}/images/background-header-faithtech.jpg"></div>
        <% end_if %>
        <div class="container typo-light">
            <div class="flex-row middle-md">
                <div class="flex-col-md-6">
                </div>
                <div class="flex-col-md-6">
                </div>
            </div>
        </div>
    </header>
    <!-- /Header section -->
<% end_if %>
