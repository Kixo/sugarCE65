<?php
if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

/**
 * Class used for Logic Hook for Accounts module
 *
 * @since  6.5.26
 */
class AccountsMarkRelated
{
	/**
	 * Logic Hook that updates related contacts name on save
	 *
	 * @param   object  $bean       The object bean.
	 * @param   string  $event      Event name
	 * @param   array   $arguments  Additional information related to the event
	 *
	 * @return  void
	 */
	function markRelated($bean, $event, $arguments)
	{
		// We will fetch all related Contacts for this Account
		$contacts = $bean->get_linked_beans('contacts', 'Contact');

		// We go through each contact to check if the string is already appended or not
		foreach ($contacts as $contact)
		{
			if (strpos($contact->last_name, '(this is related)') === false)
			{
				$contact->last_name .= ' (this is related)';
				$contact->save();
			}
		}
	}
}
