<h2 class="content_title"><img src="<?= $modules_assets ?>little-brother_32.png"> Little Brother</h2>
<ul class="content_navigation">
	<?= navigation_list_btn('home/little-brother', 'Recent') ?>
	<?= navigation_list_btn('home/little-brother/custom', 'Custom') ?>
	<?php if ($logged_user_level_id <= 2) echo navigation_list_btn('home/little-brother/manage', 'Manage', $this->uri->segment(4)) ?>
</ul>