<?php
    get_header();

    $portafolio_id = get_the_ID();
?>

<data-portfolio-detail id=<?php echo $portafolio_id; ?> />

<?php
    get_footer();
?>