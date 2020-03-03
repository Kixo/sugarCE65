<?php
if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

$hook_array['after_save'][] = Array(
	1,
	'Accounts mark all related Contacts record names',
	'custom/modules/Accounts/mark_related.php',
	'AccountsMarkRelated',
	'markRelated');
