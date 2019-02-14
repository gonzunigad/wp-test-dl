<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Blog</h1>
        </div>
    </div>
    <div class="row">
        <?php
        if (have_posts()) :
            // If there are posts matching the query then start the loop
            while ( have_posts() ) : the_post();
                ?>
                <div class="col-md-6">
                    <div class="post">
                        <h2><?php the_title(); ?></h2>
                        <p><?php the_excerpt(); ?></p>
                        <div class="img">
                            <?php the_post_thumbnail([500, 300]); ?>
                        </div>
                        <?php the_tags(); ?>
                    </div>
                </div>
            <?php endwhile;
        endif;
        ?>

    </div>
</div>
