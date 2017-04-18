<?php get_header(); ?> 
        <!-- ================= header ================= -->

        <div class="row header">
            <div class="col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1 text">
                <h1><?php bloginfo( 'name' ); ?></h1>
                <h4><?php bloginfo('description'); ?></h4>
                <a class="down" href="#"><i class="fa fa-angle-double-down arrow wow slideInDown" data-wow-duration="3s" aria-hidden="true"></i></a>
            </div>
        </div>

        <!-- ================= Latest posts ================= -->

        <div class="row latest" id="latest">
            <h2>Latest posts</h2>
            <div class="all">
              <?php $the_query = new WP_Query( 'posts_per_page=4' ); ?>

                <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>

                <div class="col-sm-3 col-xs-3 card">
                   <div class="item">
                      <a href="<?php the_permalink() ?>">
                        <?php the_post_thumbnail('post-thumbnail', ['class' => 'img-responsive responsive--full', 'title' => 'Feature image']);
                        ?>
                     </a>
                   </div>
                    

                    <h4> <a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h4>
                    <div class="additional">
                        <div class="info">
                            <div class="col-sm-6 col-xs-6 category">
                                <h5>
                                    <a href=""><?php
                                        foreach((get_the_category()) as $category) { 
                                            echo $category->cat_name . ' '; 
                                        } 
                                        ?>
                                    </a>
                                </h5>
                            </div>
                            <div class="col-sm-6 col-xs-6 comments">
                                <h5><?php
printf( _nx( '1', '%1$s', get_comments_number(), 'comments title', 'textdomain' ), number_format_i18n( get_comments_number() ) ); ?>
</h5><i class="fa fa-comments-o" aria-hidden="true"></i>
                            </div>
                        </div>
                        <h6 class="date">Posted by: admin / <?php echo get_the_date( 'Y-m-d' ); ?></h6>
                    </div>
                </div>


                <?php

                endwhile;

                wp_reset_postdata();

                ?>
               
            </div>
        </div>

        <!-- ================= About ================= -->

        <div class="row about">
            <div class="col-sm-5 col-xs-5 image">
                <img src="<?php echo get_template_directory_uri(). '/img/about.jpg' ?>" alt="">
            </div>
            <div class="col-sm-5 col-sm-offset-1 col-xs-5 col-xs-offset-1 text">
                <h2>About</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco.</p>

                <div class="row social">
                    <div class="col-sm-3 col-xs-3">
                        <a href="#"><i class="fa fa-facebook icon" aria-hidden="true"></i></a>
                    </div>
                    <div class="col-sm-3 col-xs-3">
                        <a href="#"><i class="fa fa-twitter icon" aria-hidden="true"></i></a>
                    </div>
                    <div class="col-sm-3 col-xs-3">
                        <a href="#"><i class="fa fa-instagram icon" aria-hidden="true"></i></a>
                    </div>
                    <div class="col-sm-3 col-xs-3">
                        <a href="#"><i class="fa fa-youtube icon" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <?php get_footer(); ?> 