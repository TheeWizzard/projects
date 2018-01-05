<?php
// searchform.php - Thanx to Ole Fredrik https://foundationpress.olefredrik.com/
do_action( 'richmasterxsbefore_searchform' ); ?>
<form role="search" method="get" id="searchform" action="<?php echo esc_url(home_url( '/' )); ?>">
	<?php do_action( 'richmasterxssearchform_top' ); ?>
	<div class="input-group">
		<input type="text" class="input-group-field" value="" name="s" id="s" placeholder="<?php esc_attr_e( 'Search', 'richmasterxs' ); ?>">
		<?php do_action( 'richmasterxssearchform_before_search_button' ); ?>
		<div class="input-group-button">
			<input type="submit" id="searchsubmit" value="<?php esc_attr_e( 'Search', 'richmasterxs' ); ?>" class="button">
		</div>
	</div>
	<?php do_action( 'richmasterxssearchform_after_search_button' ); ?>
</form>
<?php do_action( 'richmasterxsafter_searchform' );