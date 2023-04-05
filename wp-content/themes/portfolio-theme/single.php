<?php get_header(); //header einbinden ?>

<main>
    <?php the_post(); ?>

    <article>
    <h1><?php the_title(); ?></h1>
    <?php 
                $categories = get_the_category();
                foreach($categories as $category){
                ?>

                <li><a href="<?php get_category_link($category->term_id);?>"><?php $category->name; ?></a></li>

                <?php 
                }?>
    <?php the_content() ;?>    
</article>

</main>

<?php
get_footer(); //footer einbinden 
?>