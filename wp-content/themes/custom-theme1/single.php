<?php get_header(); ?>
<main class="container">

    <?php 
    if(have_posts()){
        while(have_posts()){
            the_post(); ?>

            <div class="single-post">
                <div class="featured-image">
                <?php the_post_thumbnail('large'); 
                
                        //Display Author and Publish Date Links
                        post_data();
                ?>
                <p> <?php echo 'Post written by: ' . get_the_author() . ' | Published on: ' . get_the_date(); ?> </p>
                </div>
                <div class="text-container">
                    <h2> <?php the_title(); ?></a></h2>

                    <p class="body-content"> <?php echo the_content();?></p>
                </div>
            </div>

            <?php
        }
    }
    ?>
</main>
<?php get_footer(); ?>