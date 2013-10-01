<?php

/**
 * Plug-ins for additional functionality in your EditableFormField classes.
 *
 * @author Malte Jansen <work@maltejansen.de>
 * @package userforms
 */
abstract class EditableFormFieldExtension extends DataExtension {

	public function updateCustomRules(ArrayList &$output) {
		
	}
	
	public function updateTitleField(FormField &$field) {
		
	}
	
	public function updatePopulateFromPostData($data) {
		
	}
	
	public function updateFieldConfiguration(FieldList &$fields) {
		
	}
	
	public function updateFieldValidationOptions(FieldList &$fields) {
		
	}
	
	public function updateErrorMessage(DBField &$field) {
		
	}
}

