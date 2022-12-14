<?php get_header(); ?>

<div class="container">
    <div class="row">
        <main class="col-md-9">
            <section class="category-information">
                <h2 class="category-title">Category: <?php echo single_cat_title(); ?></h2>
                <div class="category-description">
                    <?php echo category_description(); ?>

                </div>
            </section>
            <hr>

            <section class="category-posts">
                <h3>Posts in <?php echo single_cat_title(); ?> category:</h3>

                <?php
                    if(have_posts()){
                        while(have_posts()){
                            the_post(); ?>

                            <article class="individual-post">
                                <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                            </article>
                            <?php
                                //diplay author and publish date links
                                post_data();
                            ?>
                            <div class="image-excerpt-container">
                                <?php the_post_thumbnail('medium'); ?>
                                <?php the_excerpt(); ?>
                            </div>
                        <?php } //end while
                        //pagination
                        kodasContentPagination();
                    }
                ?>
            </section>
        </main>

    </div>
</div>

<?php get_footer(); ?>