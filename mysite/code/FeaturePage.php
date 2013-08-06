<?php
class FeaturePage extends Page {

	public static $db = array(
		"ButtonText" => "HTMLText"

	);

	public static $has_one = array(
	
      "HeroFeatureImage" => "Image"

	);
	public static $belongs_many_many = array (
		"StaffPages" => "StaffPage",
	);
	public static $has_many = array(
	);


	public function getCMSFields(){
		$f = parent::getCMSFields();
		$buttonField = new HTMLEditorField("ButtonText", "Button Text, example: [button url=\"#feature-staff-members\"]Staff Members[/button] ");
		$buttonField->rows = 3;
		$f->addFieldToTab("Root.Main", $buttonField);
	    $f->addFieldToTab("Root.Main", new UploadField("HeroFeatureImage", "Main Feature Image"));

		
		/*$gridFieldConfig3 = GridFieldConfig_RelationEditor::create();
		$gridFieldConfig3->addComponent(new GridFieldManyRelationHandler(), 'GridFieldPaginator');

		$gridField3 = new GridField("StaffMembers", "Staff Members Listed Under This Page", $this->StaffPages(), $gridFieldConfig3);
		
		$f->addFieldToTab("Root.StaffMembers", $gridField3); // add the grid field to a tab in the CMS*/
		
		$f->addFieldToTab("Root.Main", new CheckboxSetField("StaffPages", 'Staff Members Listed On This Page', StaffPage::get()->sort('Title')->map('ID', 'Title')));

	//	$f->removeByName("Content");
		//$gridFieldConfig = GridFieldConfig_RecordEditor::create();
		//$gridFieldConfig->addComponent(new GridFieldSortableRows('SortOrder'));


	/*	$gridField = new GridField("StaffTeam", "Staff Teams", StaffTeam::get(), GridFieldConfig_RecordEditor::create());
		$f->addFieldToTab("Root.Main", $gridField); // add the grid field to a tab in the CMS	*/
		return $f;
	}


}
class FeaturePage_Controller extends Page_Controller {

	/**
	 * An array of actions that can be accessed via a request. Each array element should be an action name, and the
	 * permissions or conditions required to allow the user to access it.
	 *
	 * <code>
	 * array (
	 *     'action', // anyone can access this action
	 *     'action' => true, // same as above
	 *     'action' => 'ADMIN', // you must have ADMIN permissions to access this action
	 *     'action' => '->checkAction' // you can only access this action if $this->checkAction() returns true
	 * );
	 * </code>
	 *
	 * @var array
	 */
	public static $allowed_actions = array (
	);
	
	public static function ButtonHandler($arguments,$caption= null,$parser = null){
		
		if (empty($arguments['url'])) {
		    return;
		}
		 
		$customise = array();
		/*** SET DEFAULTS ***/
		$customise['Link'] = $arguments['url'];
		$customise['Caption'] = $caption ? Convert::raw2xml($caption) : false;
		 
		//overide the defaults with the arguments supplied
		$customise = array_merge($customise,$arguments);
		 
		//get our YouTube template
		$template = new SSViewer('FeatureButton');
		 
		//return the customised template
		return $template->process(new ArrayData($customise));		
		
	}

	public function init() {
		parent::init();

	}

}