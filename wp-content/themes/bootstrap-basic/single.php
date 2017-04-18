<?php
/**
 * Template for displaying single post (read full post page).
 * 
 * @package bootstrap-basic
 */

get_header();
?> 
           
           <?php if ( have_posts() ) : ?>

            <?php while ( have_posts() ) : the_post(); ?>
            

            <div class="col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1 postDetails">
                <h6><?php the_date(); ?></h6>
                <h1><?php the_title(); ?></h1>
                <h4>
                    <?php $categories = get_the_category();
                    if ( ! empty( $categories ) ) {
                        echo '<a href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '">' . esc_html( $categories[0]->name ) . '</a>';
                    } ?>
               </h4>
               <div class="BigLine"></div>
               <div class="SmallLine"></div>
            </div>
            
            <div class="row single" id="single">
                    <div class="col-sm-8 col-sx-offset-2 col-sm-10 col-sx-offset-1 text">
                        <?php the_content(); ?>

                        <div class="info">
                            <div class="tags">
                                <h6>Tags: </h6>
                                <?php the_tags('', ' ', ''); ?>
                            </div>
                        </div>

                        <div class="email">
                            
                               <div id="respond">
                                <?php comment_form($fields); ?>
                                
                                <div class="allComments">
                                    <h1>Comments to post</h1>
                                
                                <?php foreach (get_comments() as $comment): ?>
                                   <div class="comment">
                                       <div class="commentInfo"><?php echo $comment->comment_date; ?> <span><?php echo $comment->comment_author; ?></span> said:</div> <div class="commentContent"><?php echo $comment->comment_content; ?>".</div>
                                   </div>
                                <?php endforeach; ?>
                                
                                
                                
                                </div>
                            </div>
                        
                        
                    </div>
                </div>
                
                <?php endwhile; ?>

                <?php endif; ?>
               
            
<?php get_footer(); ?> 
