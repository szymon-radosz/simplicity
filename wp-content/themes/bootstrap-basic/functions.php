<?php
function mytheme_setup() {

register_nav_menus(
array(
'footer_nav' => __( 'Footer Menu', 'bootpress' ),
'top_menu' => __( 'Top Menu', 'bootpress' )
)
);

}
add_action( 'after_setup_theme', 'mytheme_setup' );

/*images */
add_theme_support( 'post-thumbnails' );

/*comments */

add_filter( 'comment_form_default_fields', 'bootstrap3_comment_form_fields' );
function bootstrap3_comment_form_fields( $fields ) {
    $commenter = wp_get_current_commenter();
    
    $req      = get_option( 'require_name_email' );
    $aria_req = ( $req ? " aria-required='true'" : '' );
    $html5    = current_theme_supports( 'html5', 'comment-form' ) ? 1 : 0;
    
    $fields   =  array(
        'author' => '<div class="col-sm-4 col-xs-4 field"><div class="form-group comment-form-author">' .
                    '<input class="form-control" id="author" name="author" type="text" placeholder="Name*" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' /></div></div>',
        'email'  => '<div class="col-sm-4 col-xs-4 field"><div class="form-group comment-form-email">' .
                    '<input class="form-control" id="email" placeholder="E-mail*" name="email" ' . ( $html5 ? 'type="email"' : 'type="text"' ) . ' value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30"' . $aria_req . ' /></div></div>',
        'url'    => '<div class="col-sm-4 col-xs-4 field"><div class="form-group comment-form-url">' .
                    '<input class="form-control" id="url" placeholder="Website" name="url" ' . ( $html5 ? 'type="url"' : 'type="text"' ) . ' value="' . esc_attr( $commenter['comment_author_url'] ) . '" size="30" /></div></div>'        
    );
    
    return $fields;
}

add_filter( 'comment_form_defaults', 'bootstrap3_comment_form' );
function bootstrap3_comment_form( $args ) {
    $args['comment_field'] = '<div class="form-group comment-form-comment">
            ' . '
            <textarea class="form-control" placeholder="Your Comment..." id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea>
        </div>';
    $args['class_submit'] = 'btn btn-default'; // since WP 4.1
    
    return $args;
}

add_action('comment_form', 'bootstrap3_comment_button' );
function bootstrap3_comment_button() {
    echo '<button class="btn btn-default" type="submit">' . __( 'Submit' ) . '</button>';
}

?>