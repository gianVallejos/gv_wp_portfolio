<?php
    get_header();

    $post_id = get_the_ID();
?>

<data-blog-detail id=<?php echo $post_id; ?>  dir-url=<?php echo get_template_directory_uri(); ?> />

<?php
    get_footer();
?>