<?php 
/**
 * Template part for displaying Featured Posts Section
 *
 *@package Easy Blog
 */
    $featured_posts_section_title           = easy_blog_get_option( 'featured_posts_section_title' );
    $featured_posts_content_type            = easy_blog_get_option( 'featured_posts_content_type' );
    $number_of_featured_posts_items         = easy_blog_get_option( 'number_of_featured_posts_items' );

    if( $featured_posts_content_type == 'featured_posts_page' ) :
        for( $i=1; $i<=$number_of_featured_posts_items; $i++ ) :
            $featured_posts_posts[] = easy_blog_get_option( 'featured_posts_page_'.$i );
        endfor;  
    elseif( $featured_posts_content_type == 'featured_posts_post' ) :
        for( $i=1; $i<=$number_of_featured_posts_items; $i++ ) :
            $featured_posts_posts[] = easy_blog_get_option( 'featured_posts_post_'.$i );
        endfor;
    endif;
    ?>

    <?php if( !empty($featured_posts_section_title) ):?>
        <div class="section-header">
            <div class="wrapper">
                <h2 class="section-title"><?php echo esc_html($featured_posts_section_title);?></h2>
            </div><!-- .wrapper -->
        </div><!-- .section-header -->
    <?php endif;?>

    <?php if( $featured_posts_content_type == 'featured_posts_page' ) : ?>
        <div class="section-content col-3 clear">
            <?php $args = array (
                'post_type'     => 'page',
                'post_per_page' => count( $featured_posts_posts ),
                'post__in'      => $featured_posts_posts,
                'orderby'       =>'post__in',
            );        
            $loop = new WP_Query($args);                        
            if ( $loop->have_posts() ) :
            $i=-1; $j=0; 
                while ($loop->have_posts()) : $loop->the_post(); $i++; $j++; ?>             
                
                <article class="<?php echo has_post_thumbnail() ? 'has-post-thumbnail' : 'no-post-thumbnail'; ?>">
                    <div class="featured-post-item">
                        <?php if ( has_post_thumbnail() ) : ?>
                            <div class="featured-image" style="background-image: url('<?php the_post_thumbnail_url( 'full' ); ?>');">
                                <a href="<?php the_permalink();?>" class="post-thumbnail-link"></a>
                            </div><!-- .featured-image -->
                        <?php endif; ?>

                        <div class="entry-container">
                            <div class="entry-meta">                 
                                <?php easy_blog_posted_on(); ?>
                            </div><!-- .entry-meta -->

                            <header class="entry-header">
                                <h2 class="entry-title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
                            </header>

                            <div class="entry-content">
                                <?php
                                    $excerpt = easy_blog_the_excerpt( 12 );
                                    echo wp_kses_post( wpautop( $excerpt ) );
                                ?>
                            </div><!-- .entry-content -->
                        </div><!-- .entry-container -->
                    </div><!-- .featured-post-item -->
                </article>
                <?php endwhile;?>
            <?php endif;?>
            <?php wp_reset_postdata(); ?>
        </div><!-- .section-content -->
    
    <?php else: ?>
        <div class="section-content col-3 clear">
            <?php $args = array (
                'post_type'     => 'post',
                'post_per_page' => count( $featured_posts_posts ),
                'post__in'      => $featured_posts_posts,
                'orderby'       =>'post__in',
                'ignore_sticky_posts' => true,
            );        
            $loop = new WP_Query($args);                        
            if ( $loop->have_posts() ) :
            $i=-1; $j=0; 
                while ($loop->have_posts()) : $loop->the_post(); $i++; $j++; ?>                
                
                <article class="<?php echo has_post_thumbnail() ? 'has-post-thumbnail' : 'no-post-thumbnail'; ?>">
                    <div class="featured-post-item">
                        <?php if ( has_post_thumbnail() ) : ?>
                            <div class="featured-image" style="background-image: url('<?php the_post_thumbnail_url( 'full' ); ?>');">
                                <a href="<?php the_permalink();?>" class="post-thumbnail-link"></a>
                            </div><!-- .featured-image -->
                        <?php endif; ?>

                        <div class="entry-container">
                            <div class="entry-meta">                 
                                <?php easy_blog_posted_on(); ?>
                            </div><!-- .entry-meta -->

                            <header class="entry-header">
                                <h2 class="entry-title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
                            </header>

                            <div class="entry-content">
                                <?php
                                    $excerpt = easy_blog_the_excerpt( 12 );
                                    echo wp_kses_post( wpautop( $excerpt ) );
                                ?>
                            </div><!-- .entry-content -->
                        </div><!-- .entry-container -->
                    </div><!-- .featured-post-item -->
                </article>
               <?php endwhile;?>
            <?php endif;?>
            <?php wp_reset_postdata(); ?>
        </div><!-- .section-content -->
    <?php endif;