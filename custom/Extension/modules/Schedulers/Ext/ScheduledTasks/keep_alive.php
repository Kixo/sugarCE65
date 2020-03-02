<?php
array_push($job_strings, 'custom_task_keepAlive');

/**
 * This custom scheduled task will write string to sugarcrm.log on every execution
 *
 * @return  boolean
 */
function custom_task_keepAlive()
{
	// I have set it to fatal because that is a default Log level activated when installing Sugar CRM 6.5. This can be changed to debug, info, warn or other log level mapping
	$GLOBALS['log']->fatal("I'm a ScheduledTask");

	return true;
}
