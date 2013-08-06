<?php 

	class HomePageFeature extends DataObject {
		
		public static $db = array(
			"Title" => "Varchar(155)",
			"Content" => "HTMLText",
			"YouTubeEmbed" => "HTMLText",
			"SortOrder"=>"Int",
			"UseExternalLink" => "Boolean",
			"ExternalLink" => "Text"

		);
		
		public static $has_one = array (
			"AssociatedPage" => "SiteTree",
			"Image" => "Image"
		);
		
		public static $default_sort = "SortOrder";
		
		function getCMSFields() { 
			$fields = new FieldList(); 
			
			$fields->push( new TextField( 'Title', 'Title' ));
			
			$fields->push( new TreeDropdownField("AssociatedPageID", "Link to this page", "SiteTree"));
			$fields->push( new CheckboxField("UseExternalLink", "Use an external link instead of a page."));
			$fields->push( new TextField( 'ExternalLink', 'External Link' ));
			
			$fields->push( new HTMLEditorField( 'Content', 'Content' ));
			
			$fields->push( new UploadField("Image", "Image (350 x 180 pixels)"));
			$fields->push( new TextField( "YouTubeEmbed", "Use a YouTube embed code instead of an image:"));
		
			return $fields; 
		}
		
	}