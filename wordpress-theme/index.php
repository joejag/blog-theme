<?php get_header(); ?>

        <div class="container-fluid">

            <div class="row-fluid">
                <div class="span9">
<?php while ( have_posts() ) : the_post(); ?>
                    <div class="row-fluid">
                        <div class="span12">

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                            <div class="date_label well">
                                <div class="date_day"><?php the_time ('j');?></div>
                                <div class="date_month"><?php the_time ('M'); ?></div>
                                <div class="date_year"><?php the_time ('Y'); ?></div>
                            </div>

<a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', '_s' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><h2 class="article_heading"><?php the_title(); ?></h2></a>
<?php the_content(); ?>
                            </div><!--/span-->
                        </div><!--/row-->
</article>
<?php endwhile; ?>

<div class="navigation">
<ul class="pager">
<li class="previous"><?php next_posts_link('&larr; Older Entries') ?></li>
<li class="next"><?php previous_posts_link('Newer Entries &rarr;') ?></li>
</ul>
</div>

                        </div><!--/span-->
<?php get_sidebar(); ?>

                   </div><!--/row-->

<?php get_footer(); ?>
