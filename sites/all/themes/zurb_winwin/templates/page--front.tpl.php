<div class="mobile-header">
	<div class="row">
		<div class="twelve columns">
			<div class="site-name">WinWin Solutions</div>
		</div>
	</div>
</div>

<div class="top-bar-wrapper">
	<div class="row">
		<nav class="top-bar" data-options="is_hover:false" style="margin: 0px 0px -40px 0px;">
			<ul class="title-area right">
				<li class="name"><a href="">Home</a></li>
				<li class="name"><a href="">Features</a></li>
				<li class="name"><a href="">How We Can Help</a></li>
				<li class="name"><a href="">Pricing</a></li>
				<li class="name user"><a href="">Login</a></li>
				<li class="name user"><a href="">Register</a></li>
				<li class="toggle-topbar menu-icon"><a href="#"></a></li>
			</ul>
		</nav>
	</div>
</div>
	
<div class="header-wrapper">
	<div class="row">
		<?php if ($linked_site_name || $linked_logo): ?>
			<div class="two columns">
				<?php if ($linked_logo): ?>
					<div class="logo"><?php print $linked_logo; ?></div>
				<?php endif; ?>
			</div>
			<div class="ten columns text-right">
				<div class="tagline" style="float: left"><h3 class="subheader">Changing how businesses work together.</h3><!--<img src="http://gotowinwin.com/wwfiles/images/hdr_winwin_tagline.png" />--></div>
			</div>
		<?php endif; ?>
	</div>
</div>

<?php if (!empty($page['header'])): ?>
  <div class="row">
    <div class="twelve columns">
      <?php print render($page['header']);?>
    </div>
  </div>
<?php endif; ?>

<!--<?php if ($main_menu_links || !empty($page['navigation'])): ?>
  <div class="row">
    <nav class="twelve columns">
      <?php if (!empty($page['navigation'])): ?>
        <?php print render($page['navigation']);?>
      <?php else: ?>
        <?php print $main_menu_links; ?>
      <?php endif; ?>
    </nav>
  </div>
<?php endif; ?>-->

<?php if ($site_slogan): ?>
  <div class="row">
    <div class="twelve columns panel radius">
      <?php print $site_slogan; ?>
    </div>
  </div>
<?php endif; ?>
<div class="row">
  <div id="main" class="<?php print $main_grid; ?> columns">
    <?php if ($breadcrumb): print $breadcrumb; endif; ?>
    <?php if ($messages): print $messages; endif; ?>
    <?php if (!empty($page['help'])): print render($page['help']); endif; ?>
    <?php if (!empty($page['highlighted'])): ?>
      <div class="highlight panel callout">
        <?php print render($page['highlighted']); ?>
      </div>
    <?php endif; ?>
    <a id="main-content"></a>
    <?php if ($title && !$is_front): ?>
      <?php print render($title_prefix); ?>
      <h1 id="page-title" class="title"><?php print $title; ?></h1>
      <?php print render($title_suffix); ?>
    <?php endif; ?>

    <?php if (!empty($tabs)): ?>
      <?php print render($tabs); ?>
      <?php if (!empty($tabs2)): print render($tabs2); endif; ?>
    <?php endif; ?>
    <?php if ($action_links): ?>
      <ul class="action-links">
        <?php print render($action_links); ?>
      </ul>
    <?php endif; ?>
    
    <div id="triptychs" class="row">
    	<div class="four columns">
    		<div class="triptych panel">
					<?php if ($page['triptych_first']): ?>
						<?php print render($page['triptych_first']); ?>
					<?php endif; ?>
					<a href="#" class="button primary radius">Learn More</a>
				</div>
    	</div>
    	<div class="four columns">
    		<div class="triptych panel">
					<?php if ($page['triptych_second']): ?>
						<?php print render($page['triptych_second']); ?>
					<?php endif; ?>
					<a href="#" class="button primary radius">Learn More</a>
				</div>
    	</div>
    	<div class="four columns">
    		<div class="triptych panel">
					<?php if ($page['triptych_third']): ?>
						<?php print render($page['triptych_third']); ?>
					<?php endif; ?>
					<a href="#" class="button primary radius">Learn More</a>
				</div>
    	</div>
    </div>
    
    <?php print render($page['content']); ?>
  </div>
  <?php if (!empty($page['sidebar_first'])): ?>
    <div id="sidebar-first" class="<?php print $sidebar_first_grid; ?> columns sidebar">
      <?php print render($page['sidebar_first']); ?>
    </div>
  <?php endif; ?>
  <?php if (!empty($page['sidebar_second'])): ?>
    <div id="sidebar-second" class="<?php print $sidebar_sec_grid; ?> columns sidebar">
      <?php print render($page['sidebar_second']); ?>
    </div>
  <?php endif; ?>
</div>
<?php if (!empty($page['footer_first']) || !empty($page['footer_middle']) || !empty($page['footer_last'])): ?>
  <footer class="row">
    <?php if (!empty($page['footer_first'])): ?>
      <div id="footer-first" class="four columns">
        <?php print render($page['footer_first']); ?>
      </div>
    <?php endif; ?>
    <?php if (!empty($page['footer_middle'])): ?>
      <div id="footer-middle" class="four columns">
        <?php print render($page['footer_middle']); ?>
      </div>
    <?php endif; ?>
    <?php if (!empty($page['footer_last'])): ?>
      <div id="footer-last" class="four columns">
        <?php print render($page['footer_last']); ?>
      </div>
    <?php endif; ?>
  </footer>
<?php endif; ?>
<div class="bottom-bar panel">
  <div class="row">
    <div class="twelve columns">
      &copy; <?php print date('Y') . ' ' . check_plain($site_name); ?>
    </div>
  </div>
</div>
