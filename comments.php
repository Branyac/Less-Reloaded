<h3 id="comments">
	<?php comments_number( esc_html__( 'No comments' ,'less-revival' ), esc_html__( 'One comment' ,'less-revival' ), esc_html__( '% comments' ,'less-revival' ) ); ?>
</h3>
<?php the_comments_pagination( array(
	'prev_text' => '<span class="screen-reader-text">' . __( 'Previous', 'less-revival' ) . '</span>',
	'next_text' => '<span class="screen-reader-text">' . __( 'Next', 'less-revival' ) . '</span>',
) );
?>
<ol class="commentlist">
	<?php wp_list_comments(); ?>
</ol>
<?php comment_form(); ?>