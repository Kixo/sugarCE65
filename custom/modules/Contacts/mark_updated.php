<?php
if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

/**
 * Class used for Logic Hook for Contacts module
 *
 * @since  6.5.26
 */
class ContactsMarkUpdated
{
	/**
	 * Logic Hook that updates contacts name on save
	 *
	 * @param   object  $bean       The object bean.
	 * @param   string  $event      Event name
	 * @param   array   $arguments  Additional information related to the event
	 *
	 * @return  void
	 */
	function markUpdated($bean, $event, $arguments)
	{
		// We can also check for $arguments['isUpdate'] if we only want to update existing Contacts and not the new Contacts
		// Here we check if the last_name contains required string, if it doesn't then we will add it
		if (strpos($bean->last_name, '(this is appended)') === false)
		{
			$bean->last_name .= ' (this is appended)';
		}
	}
}
