<?php
/**
 * The template for displaying Comments
 *
 * The area of the page that contains comments and the comment form.
 */
?>
<?php
// If the current post is protected by a password and the visitor has not yet 
// entered the password we will return early without loading the comments.
// ----------------------------------------------------------------------------------------
if ( post_password_required() ) {
    return;
}
?>

<?php if ( have_comments() || comments_open()) : ?>
<div class="blog-details__wrapper">
    <?php if ( get_comments_number() >= 1 ): ?>
    <div class="post-comments-wrap">
        <div class="post-comment-title">
            <?php
                $comment_no = number_format_i18n( get_comments_number() );
                $comment_text = ( !empty( $comment_no ) AND ( $comment_no > 1 ) ) ? esc_html__( ' Comments', 'routex' ) : esc_html__( ' Comment ', 'routex' );
                $comment_no = ( !empty( $comment_no ) AND ( $comment_no > 0 ) ) ? '<h3 class="mb-20 wow fadeInLeft  animated">' . esc_html( $comment_no . $comment_text ) . '</h3>' : ' ';
                print sprintf( "%s", $comment_no );
            ?>
        </div>
        <div class="latest-comments mb-30">
            <ul>
                <?php
                    wp_list_comments( [
                        'style'       => 'ul',
                        'callback'    => 'routex_comment',
                        'avatar_size' => 90,
                        'short_ping'  => true,
                    ] );
                ?>
            </ul>
        </div>
    </div>

    <?php endif;?>

    <?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ): ?>
    <div class="comment-pagination mb-50 d-none">
        <nav id="comment-nav-below" class="comment-navigation" role="navigation">
            <h1 class="screen-reader-text"><?php esc_html_e( 'Comment navigation', 'routex' );?></h1>
            <div class="row">
                <div class="col-md-6">
                    <div class="nav-previous ">
                        <?php previous_comments_link( esc_html__( '&larr; Older ', 'routex' ) );?></div>
                </div>
                <div class="col-md-6">
                    <div class="nav-next "><?php next_comments_link( esc_html__( 'Newer &rarr;', 'routex' ) );?>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </nav><!-- #comment-nav-below -->
    </div>


    <?php endif; // check for comment navigation ?>

    <div class="blog-details__wrapper-from mt-20">
        <?php
    $post_id = '';
    if ( null === $post_id )
        $post_id = get_the_ID();
    else
        $id      = $post_id;

    $commenter       = wp_get_current_commenter(); 
    $user            = wp_get_current_user();
    $user_identity   = $user->exists() ? $user->display_name : '';


    $req         = get_option( 'require_name_email' );
    $aria_req    = ( $req ? " aria-required='true'" : '' );

    $fields = array(
        'author' => '<div class="row mb-minus-20"><div class="col-md-4"><div class="blog-details__wrapper-from-input mb-20 wow fadeInLeft  animated" data-wow-delay=".4s"><input placeholder="'.  esc_attr__('Your Name', 'routex').'" id="author" class="tp-form-control" name="author" type="text" value="' . esc_attr( $commenter[ 'comment_author' ] ) . '" size="30"' . $aria_req . ' /></div></div>',

        'email'  => '<div class="col-md-4"><div class="blog-details__wrapper-from-input mb-20 wow fadeInLeft  animated" data-wow-delay=".4s"><input placeholder="'.  esc_attr__('Your Email', 'routex').'" id="email" name="email" class="tp-form-control" type="email" value="' . esc_attr( $commenter[ 'comment_author_email' ] ) . '" size="30"' . $aria_req . ' /></div></div>',

        'website'    => '<div class="col-md-4"><div class="blog-details__wrapper-from-input mb-20 wow fadeInLeft  animated" data-wow-delay=".4s"><input placeholder="'.  esc_attr__('Your Website', 'routex').'" id="text" name="text" class="tp-form-control" type="text" value="' . esc_attr( $commenter[ 'comment_author_url' ] ) . '" size="30" /></div></div></div>',
    );

    if ( is_user_logged_in() ) {
        $cl = 'loginformuser';
    } else {
        $cl = '';
    }
    $defaults = [
        'fields'             => $fields,
        'comment_field'      => '
            <div class="row post-input">
                <div class="col-md-12 ' . $cl . '">
                    <div class="blog-details__wrapper-from-textarea mt-20 wow fadeInLeft  animated"><textarea placeholder="'.  esc_attr__('Write Message..', 'routex').'" id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea>
                </div></div>
                <div class="clearfix"></div>
            </div>
        ',

        'submit_button'    => '<div class="blog-details__wrapper-from-button wrap d-flex justify-content-between mt-30 wow fadeInLeft  animated">
        <div class="live-comment-widget__agree gap wow fadeInLeft" data-wow-delay="1.2s">
            <input type="checkbox" class="form-check-input" id="agree">
            <label class="form-check-label" for="agree">Save my name email and website</label>
        </div>
        <button class="teamdetail__from-content-button-btn tp-btn wow fadeInLeft" type="submit"><span>' . esc_html__( 'Post Comment ', 'routex' ).'</span></button>
        </div>',
        /** This filtwp-content/themes/routex/incer is documented in wp-includes/link-template.php */
        'must_log_in'        => '
            <p class="must-log-in">
            '.esc_html__('You must be','routex').' <a href="'.esc_url(wp_login_url( apply_filters( 'the_permalink', get_permalink( $post_id ) ) )).'">'.esc_html__('logged in','routex').'</a> '.esc_html__('to post a comment.','routex').'
            </p>',
        /** This filter is documented in wp-includes/link-template.php */
        'logged_in_as'       => '
            <p class="logged-in-as">
            '.esc_html__('Logged in as','routex').' <a href="'.esc_url(get_edit_user_link()).'">'.esc_html($user_identity).'</a>. <a href="'.esc_url(wp_logout_url( apply_filters( 'the_permalink', get_permalink( $post_id ) ) )).'" title="'.esc_attr__('Log out of this account','routex').'">'.esc_html__('Log out?','routex').'</a>
            </p>',
        'id_form'            => 'commentform',
        'id_submit'          => 'submit',
        'class_submit'       => 'tp-btn',
        'title_reply'        => esc_html__( 'Add a comment ', 'routex' ),
        'title_reply_to'     => esc_html__( 'Leave a Reply to %s', 'routex' ),
        'cancel_reply_link'  => esc_html__( 'Cancel reply', 'routex' ),
        'label_submit'       => esc_html__( 'Post Comment', 'routex' ),
        'format'             => 'xhtml',
    ];

    comment_form( $defaults );
    ?>

    </div><!-- #comments -->
</div><!-- #comments -->
<?php endif;