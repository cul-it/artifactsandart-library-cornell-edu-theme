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
		<h1 class="title"><a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home">Campus Artifacts <span>&amp;</span> Art</a></h1>
	</header>	
	
     <nav>
		<?php print render($page['navigation']); ?>
     </nav>

	
	<div class="main-content clearfix">
		<div class="gutter">
			<div class="eight columns clearfix">
				<?php print $messages; ?>
				<?php if ($title): ?><h2><?php print $title; ?></h2><?php endif; ?>
				<?php if ($tabs = render($tabs)): ?><div class="tabs"><?php print $tabs; ?></div><?php endif; ?>
				<?php print render($page['content']); ?>
				<?php if(drupal_is_front_page()) {unset($page['content']['system_main']['default_message']);} ?>
			</div>
			<div class="four columns clearfix">
				<?php print render($page['sidebar_first']); ?>
 				<?php print render($page['sidebar_second']); ?>
			</div>
		</div>
	</div><!-- main-content -->	
	<footer>
		<?php print render($page['footer']); ?>
	</footer
</div><!-- container -->
