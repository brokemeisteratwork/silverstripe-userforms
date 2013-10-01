<?php

/**
 * Plug-ins for additional functionality in your EditableFormField classes.
 *
 * @author Malte Jansen <work at maltejansen dot de>
 * @package userforms
 */
abstract class EditableFormFieldExtension extends DataExtension {

	/**
	 * This function is used to provide modifications to the CustomRules {@link EditableFormField::CustomRules()}
	 *
	 * @param ArrayList $output FieldList with a contained CustomRules
	 */
	public function updateCustomRules(ArrayList &$output) {
		
	}
	
	/**
	 * This function is used to provide modifications to the TitleField {@link EditableFormField::TitleField()}
	 *
	 * @param FormField $field Field for editing the Title
	 */	
	public function updateTitleField(FormField &$field) {
		
	}
	
	/**
	 * This function is used to populate from post data {@link EditableFormField::populateFromPostData()}
	 *
	 * @param array $Data Data from post
	 */	
	public function updatePopulateFromPostData(&$data) {
		
	}
	
	/**
	 * This function is used to provide modifications to the FieldConfiguration {@link EditableFormField::FieldConfiguration()}
	 *
	 * @param FieldList $fields FieldList with a contained FieldConfiguration
	 */
	public function updateFieldConfiguration(FieldList &$fields) {
		
	}
	
	/**
	 * This function is used to provide modifications to the FieldConfiguration {@link EditableFormField::getFieldValidationOptions()}
	 *
	 * @param FieldList $fields FieldList with a contained FieldValidationOptions
	 */
	public function updateFieldValidationOptions(FieldList &$fields) {
		
	}
	
	/**
	 * This function is used to provide modifications to the ErrorMessage {@link EditableFormField::getErrorMessage()}
	 *
	 * @param DBField $field DBField with the contained ErrorMessage
	 */
	public function updateErrorMessage(DBField &$field) {
		
	}
}

