
<?php if (urna_tbay_get_config('select-header-page', 'default') === 'default') :
    $active_theme = urna_tbay_get_theme();
    get_template_part('headers/'.$active_theme);
?>

<?php else : ?>
 
	<header id="tbay-customize-header" class="tbay_header-template site-header hidden-md hidden-sm hidden-xs">
		<?php urna_tbay_display_header_builder(); ?> 
		<div id="nav-cover"></div>
		<div class="bg-close-canvas-menu"></div>
	</header>

<?php endif; ?>