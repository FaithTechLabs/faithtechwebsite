<!DOCTYPE html>
<!--[if !IE]><!-->
<html lang="$ContentLocale">
<!--<![endif]-->
<!--[if IE 6 ]>
<html lang="$ContentLocale" class="ie ie6"><![endif]-->
<!--[if IE 7 ]>
<html lang="$ContentLocale" class="ie ie7"><![endif]-->
<!--[if IE 8 ]>
<html lang="$ContentLocale" class="ie ie8"><![endif]-->
<head>
    <% base_tag %>
    <title><% if $MetaTitle %>$MetaTitle<% else %>$Title<% end_if %> | $SiteConfig.Title</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    $MetaTags(false)
    <!-- Lib CSS -->
    <link href="//fonts.googleapis.com/css?family=Rancho|Open+Sans:400,300,300italic,400italic,600,600italic,700,800italic,700italic,800"
          rel="stylesheet">
    <link href="{$ThemeDir}/minify/rgen_min.css" rel="stylesheet">
    <link href="{$ThemeDir}/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="{$ThemeDir}/css/custom.css" rel="stylesheet">

    <!-- Favicons -->
    <link rel="icon" href="{$ThemeDir}/images/favicons/favicon.ico">
    <link rel="apple-touch-icon" href="{$ThemeDir}/images/favicons/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="{$ThemeDir}/images/favicons/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="{$ThemeDir}/images/favicons/apple-touch-icon-114x114.png">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
    <script src="{$ThemeDir}/js/html5shiv.js"></script>
    <script src="{$ThemeDir}/js/respond.min.js"></script>
    <![endif]-->
    <!--[if IE 9 ]>
    <script src="{$ThemeDir}/js/ie-matchmedia.js"></script>
    <![endif]-->

</head>
<body class="lw-2">
<div id="page">
    <% include Header %>
    $Layout
    <% if $ClassName != 'HomePage' && $URLSegment != 'Security'%>
        <% include JoinMovement %>
    <% end_if %>
    <% include Footer %>
</div>
</body>
</html>
