<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>GVallejos.com Portfolio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

    <div id="sidebar">
        <data-the-side-bar cur-url=<?php global $wp; echo home_url($wp->request) ?> url=<?php echo get_home_url(); ?> dir-url=<?php echo get_template_directory_uri(); ?> />
    </div>

    <div id="app">