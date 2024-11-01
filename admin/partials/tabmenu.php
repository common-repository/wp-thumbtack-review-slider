<?php
$urltrimmedtab = remove_query_arg( array('page', '_wpnonce', 'taction', 'tid', 'sortby', 'sortdir', 'opt','settings-updated') );

$urlreviewlist = esc_url( add_query_arg( 'page', 'wp_thumbtack-reviews',$urltrimmedtab ) );
$urltemplateposts = esc_url( add_query_arg( 'page', 'wp_thumbtack-templates_posts',$urltrimmedtab ) );
$urlgetpro = esc_url( add_query_arg( 'page', 'wp_thumbtack-get_thumbtack',$urltrimmedtab ) );
$urlforum = esc_url( add_query_arg( 'page', 'wp_thumbtack-get_pro',$urltrimmedtab ) );
?>	
	<h2 class="nav-tab-wrapper">
	<a href="<?php echo $urlgetpro; ?>" class="nav-tab <?php if($_GET['page']=='wp_thumbtack-get_thumbtack'){echo 'nav-tab-active';} ?>"><?php _e('Get Thumbtack Reviews', 'wp-thumbtack-review-slider'); ?></a>
	<a href="<?php echo $urlreviewlist; ?>" class="nav-tab <?php if($_GET['page']=='wp_thumbtack-reviews'){echo 'nav-tab-active';} ?>"><?php _e('Reviews List', 'wp-thumbtack-review-slider'); ?></a>
	<a href="<?php echo $urltemplateposts; ?>" class="nav-tab <?php if($_GET['page']=='wp_thumbtack-templates_posts'){echo 'nav-tab-active';} ?>"><?php _e('Templates', 'wp-thumbtack-review-slider'); ?></a>
	<a href="<?php echo $urlforum; ?>" class="nav-tab <?php if($_GET['page']=='wp_thumbtack-get_pro'){echo 'nav-tab-active';} ?>"><?php _e('Get Pro Version', 'wp_thumbtack-get_pro'); ?></a>

	</h2>