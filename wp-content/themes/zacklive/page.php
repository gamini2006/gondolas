<?php
/**
 * The template for displaying all pages.
 */

get_header(); ?>

    <div id="primary-left" class="content-area col-sm-12 col-md-6">
        <?php if ( is_front_page() ) { ?>
        <div class="headerslider"> <?php echo do_shortcode("[zia3 id='116' fade='3000' delay='4000' overlay='http://mydomain.com/urlofimage' type='1' arrows='no' autoplay='yes' poster='no' random='no' title='' title_link='' slogan='' slogan_link='' link_color='255,255,255' slogan_link_color='255,255,255' ]"); ?></div>
    <?php }
    else{  ?>
        
            <?php

                if(has_post_thumbnail()) {
                global $post;
                $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 500,500 ), true, '' );
                ?>
                
                <div class="bgimage" style="background: url( '<?php echo $src[0]; ?>' ) !important;"></div>
                <?php
                
                }
            }
            ?>
            
       
    </div><!-- #primary -->
    <div id="primary-right" class="content-area col-sm-12 col-md-6">
        <main id="main" class="site-main" role="main" itemprop="mainContentOfPage" itemscope="itemscope" itemtype="http://schema.org/Blog">

            <?php while ( have_posts() ) : the_post(); ?>

                <?php get_template_part( 'content', 'page' ); ?>

                <?php
                    // If comments are open or we have at least one comment, load up the comment template
                    //if ( comments_open() || get_comments_number() ) :
                    //    comments_template();
                    //endif;
                ?>

            <?php endwhile; // end of the loop. ?>
            <?php
                if ( is_front_page() ) {
                    get_sidebar(); 
                }
            ?>

        </main><!-- #main -->
    </div><!-- #primary -->


    <!-- <div id="primary111" class="content-area col-sm-12 col-md-8">
        <main id="main" class="site-main" role="main" itemprop="mainContentOfPage" itemscope="itemscope" itemtype="http://schema.org/Blog">

            <?php //while ( have_posts() ) : the_post(); ?>

                <?php //get_template_part( 'content', 'page' ); ?>

                <?php
                    // If comments are open or we have at least one comment, load up the comment template
                    //if ( comments_open() || get_comments_number() ) :
                    //    comments_template();
                    //endif;
                ?>

            <?php //endwhile; // end of the loop. ?>

        </main>
    </div> -->

<?php //get_sidebar(); ?>
<?php get_footer(); ?>