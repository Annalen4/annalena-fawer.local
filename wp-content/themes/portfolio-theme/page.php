<?php get_header(); //header einbinden ?>

<main>
    <?php the_post(); ?>
    <h1><?php the_title(); ?></h1>
    <section>
        <?php the_content(); ?>
    </section>

</main>

<?php
get_footer(); //footer einbinden 
?>