
<section class="ftco-section bg-light">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-2">
            <div class="col-md-8 text-center heading-section ftco-animate">
                <h2 class="mb-4" id="educulture-blog-heading"><?php echo esc_html(get_theme_mod('educulture_blog_heading',__('Recent Blog','educulture')));?></h2>
                <p id="educulture-blogl-description"><?php echo esc_html(get_theme_mod('educulture_blog_description'));?></p>
            </div>
        </div>
        <div class="row">
                             <?php
    $educulture_popular_posts = new WP_Query( array(
        'posts_per_page'      => 3,
        'ignore_sticky_posts' => 1,
    ) );
    while ( $educulture_popular_posts->have_posts() ):
        $educulture_popular_posts->the_post();
    ?> 

            <div class="col-md-6 col-lg-4 ftco-animate blog-box">
                 <div class="blog-entry">
                        <a href="<?php the_permalink();?>">
                            <?php 
                        if(has_post_thumbnail()){
                        the_post_thumbnail("educulture-blog-image",array("class"=>"img-fluid"));
                        }
                        ?>
                        </a>
                        <?php 
                     $educulture_post_thumbnail= get_the_post_thumbnail();
                    ?>
                        <div class="text bg-white p-4">
                            <h3 class="heading"><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
                           <p><?php the_excerpt(); ?></p>
                            
                        </div>
                    </div>
            </div>
             <?php 
        endwhile;
        wp_reset_query();
        ?>
        </div>
    </div>
</section>
