<div class="commententries">

	<?php if ( post_password_required() ) : ?>
        <p class="nopassword"><?php _e( 'This post is password protected. Enter the password to view any comments.','dt_themes'); ?></p>
    <?php  return;
        endif;?>
        
    <h4><?php comments_number(__('No Comments','dt_themes'), __('Comment ( 1 )','dt_themes'), __('Comments ( % )','dt_themes') );?></h4>    
    
    <?php if ( have_comments() ) : ?>
        <?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through? ?>
                    <div class="navigation">
                        <div class="nav-previous"><?php previous_comments_link( __( 'Older Comments','dt_themes'  ) ); ?></div>
                        <div class="nav-next"><?php next_comments_link( __( 'Newer Comments','dt_themes') ); ?></div>
                    </div> <!-- .navigation -->
        <?php endif; // check for comment navigation ?>
        <ul class="commentlist">
            <?php wp_list_comments( array( 'callback' => 'dttheme_custom_comments' ) ); ?>
        </ul>
    <?php else: ?>
        <?php if ( ! comments_open() ) : ?>
            <p class="nocomments"><?php _e( 'Comments are closed.','dt_themes'); ?></p>
        <?php endif;?>    
    <?php endif; ?>
        
    <!-- Comment Form -->
    <?php 
	if ('open' == $post->comment_status) : 
		$comments_args = array(
				'title_reply' => __( 'Give A Reply ','dt_themes' ),
				'comment_field'=> '<p class="textarea">
										<textarea required placeholder="'.__('Type Your Message','dt_themes').'" rows="3" cols="5" name="comment" id="comment"></textarea>
									</p>',
				'comment_notes_before'=>'',
				'comment_notes_after'=>'',
				'label_submit'=>__('Post a comment','dt_themes'),
					'fields' => apply_filters( 
						'comment_form_default_fields', 
						'<p class="dt-sc-one-third column first">
							<input type="text" required="" placeholder="'.__('Enter Your Name  *','dt_themes').'" title="'.__('Please enter your name','dt_themes').'" name="author" id="author"></p>
						<p class="dt-sc-one-third column"> <input type="text" required="" placeholder="'.__('Enter Your Email  *','dt_themes').'" title="'.__('Please enter your valid email_id','dt_themes').'" name="email" id="email"> </p>
						<p class="dt-sc-one-third column">	<input type="text" required="" placeholder="'.__('Enter Your Website URL','dt_themes').'" name="website" id="website"></p>'
					)
				);	
				
		ob_start();
		comment_form( $comments_args );
		$cmt_form = ob_get_clean(); 
		echo str_replace('class="form-submit"','class="form-submit dt-sc-button small"', $cmt_form);
    endif; ?>
    
</div>