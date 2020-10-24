<h3 id="comments">
	<?php comments_number( esc_html__( 'no responses' ,'less-revival' ), esc_html__( 'one response' ,'less-revival' ), esc_html__( '% responses' ,'less-revival' ) ); esc_html_e( ' for ' ,'less-revival'); the_title(); ?>
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