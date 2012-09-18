<?php

/**
 * @file
 * Default theme implementation to display a single Drupal page while offline.
 *
 * All the available variables are mirrored in html.tpl.php and page.tpl.php.
 * Some may be blank but they are provided for consistency.
 *
 * @see template_preprocess()
 * @see template_preprocess_maintenance_page()
 */
?>
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->

<head>
	<meta charset="utf-8">
  	<title><?php print $head_title; ?></title>
  	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
  	<?php print $styles; ?>
  	<?php print $scripts; ?>
  	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>
<body class="<?php print $classes; ?>" <?php print $attributes;?>>
<div class="cu-identity">
	<div class="container">
		<div id="cu-identity-wrap">
			<div id="cu-identity-content">
				<a id="insignia-link" href="http://www.cornell.edu/"><img src="<?php print $base_path; ?>/img/layout/cu_logo_unstyled.gif" alt="Cornell University" border="0" /></a>
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
		<h1 class="title"><a href="<?php print $front_page; ?>">Campus Artifacts, Art <span>&amp;</span> Memorabilia</a></h1>
	</header>
	
	<?php if ($main_menu): ?>
        <nav>
          <?php
          // This code snippet is hard to modify. We recommend turning off the
          // "Main menu" on your sub-theme's settings form, deleting this PHP
          // code block, and, instead, using the "Menu block" module.
          // @see http://drupal.org/project/menu_block
          print theme('links__system_main_menu', array(
            'links' => $main_menu,
            'attributes' => array(
              'class' => array('links', 'inline', 'clearfix'),
            ),
            'heading' => array(
              'text' => t('Main menu'),
              'level' => 'h2',
              'class' => array('element-invisible'),
            ),
          )); ?>
        </nav>
      <?php endif; ?>
	
	<div class="main-content clearfix">
		
			<?php
            // Render the sidebars to see if there's anything in them.
	            $sidebar_first  = render($page['sidebar_first']);
	            $sidebar_second = render($page['sidebar_second']);
        	?>



        <div class="gutter">

			<?php if ($title): ?>
		        <h2><?php print $title; ?></h2>
		    <?php endif; ?>

		    <?php if ($sidebar_first || $sidebar_second): ?>
		      	<div class="sidebar">
		        	<?php print $sidebar_first; ?>
		        	<?php print $sidebar_second; ?>
		      	</div><!-- /.sidebar -->
		    <?php endif; ?>

		   	<p>The Campus Artifacts, Art &amp; Memorabilia web site is currently under maintenance. We apologize for any inconvenience.</p>
		
		</div>
	</div><!-- main-content -->
	<footer>
		<?php print render($page['footer']); ?>
		<?php if ( user_is_logged_in() ) { print '<p class="login">Hi <a href="/user" title="View your dashboard">'. $user->name .'</a> (<a href="/user/logout" title="Logout">Logout</a>)</p>'; } else { print '<p class="login"><a id="login" href="/user" title="Login here">Login</a></p>'; } ?>
	</footer
</div><!-- container -->

<?php print render($page['bottom']); ?>

</body>
</html>
