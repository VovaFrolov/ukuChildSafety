<?php
/*
  Template name: Template Home
*/
?>
<?php get_header(); ?>

<?php if ($builder = get_field('builder')) { ?>
        <?php foreach ($builder as $block) {
            $layout = $block['acf_fc_layout'];
        ?>

            <?php

            if (file_exists(locate_template("templates/$layout.php"))) {
                include(locate_template("templates/$layout.php"));
            }
            ?>

        <?php } ?>
    <?php } ?>


       
<?php get_footer(); ?>