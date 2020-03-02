<?php
$hook_array['before_save'][] = Array(
	1,
	'Mark name as update in Contacts module',
	'custom/modules/Contacts/mark_updated.php',
	'ContactsMarkUpdated',
	'markUpdated');
