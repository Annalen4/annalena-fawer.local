<?php get_header(); //header.php einebinden ?> 

<main>
    <h1 class="h1">Projekte</h1>
    <section>
        <?php
        while(have_posts()){ 
            the_post();?>

            <a href="<?php the_permalink(); ?>"> <h3><?php the_title();?></h3></a>
            <time datetime="<?php the_time('Y-m-d' );?>"><?php the_time('d.m.Y');?> </time>
            <ul>
                <?php 
                $categories = get_the_category();
                foreach($categories as $category){
                ?>

                <li><a href="<?php get_category_link($category->term_id);?>"><?php $category->name; ?></a></li>

                <?php 
                }?>

            </ul>
            <a href="<? the_permalink();?>"><?php the_post_thumbnail(); ?></a>
           
            <?php 
        }?>
    </section>
</main>
<?php get_footer(); //footer einbinden ?>