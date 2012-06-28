<?php
/**
 * @file
 * Default theme implementation to display a single Drupal page.
 */
?>


<div class="cu-identity">
	<div class="container">
		<div id="cu-identity-wrap">
			<div id="cu-identity-content">
				<a id="insignia-link" href="http://www.cornell.edu/"><img src="img/layout/cu_logo_unstyled.gif" alt="Cornell University" border="0" /></a>
				<div id="unit-signature-links">
					<a id="cornell-link" href="http://www.library.cornell.edu/">Cornell University Library</a>
				</div>
				<div id="search-navigation">
					<ul>
						<li><a href="http://www.library.cornell.edu/accessiblesearch/">Search Library</a></li>
						<li><a href="http://www.cornell.edu/search/">Search Cornell</a></li>
					</ul>
				</div>
			</div><!-- cu-identity-content -->
		</div><!-- cu-identity-wrap -->
	</div>
</div>


<div class="container">
	<header>
		<h1 class="title"><a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><?php print $site_name; ?></a></h1>
	</header>
	
	
	<?php if ($main_menu || $secondary_menu): ?>
      <nav>
        <?php print theme('links__system_main_menu', array('links' => $main_menu, 'attributes' => array('id' => 'main-menu', 'class' => array('links', 'inline', 'clearfix')), 'heading' => t('Main menu'))); ?>
        <?php print theme('links__system_secondary_menu', array('links' => $secondary_menu, 'attributes' => array('id' => 'secondary-menu', 'class' => array('links', 'inline', 'clearfix')), 'heading' => t('Secondary menu'))); ?>
      </nav>
    <?php endif; ?>
	
	<div class="main-content clearfix">
		<div class="gutter">
			<?php print $messages; ?>
			<?php if ($title): ?><h2><?php print $title; ?></h2><?php endif; ?>
			<?php if ($tabs = render($tabs)): ?><div class="tabs"><?php print $tabs; ?></div><?php endif; ?>
	        <?php print render($page['help']); ?>
	        <?php if ($action_links = render($action_links)): ?><ul class="action-links"><?php print $action_links; ?></ul><?php endif; ?>
	        <?php print render($page['content']); ?>
	        <?php print $feed_icons; ?>
			<?php print render($page['sidebar_first']); ?>
 			<?php print render($page['sidebar_second']); ?>
		</div>
	</div><!-- main-content -->	
	<footer>
		<?php print render($page['footer']); ?>
	</footer
</div><!-- container -->
