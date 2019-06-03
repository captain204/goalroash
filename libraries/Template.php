<?php
/*
*Template class
*Creates a template/View object
*/
class Template{
	// protected template
	protected  $template;
	// Variable passed in
	protected $vars = array();

	/*
	*	Class constructor
	*/ 

	public function __construct($template){
		$this->template = $template;
	}

	/*
	*	Get template variables
	* __get and set is a magic method used for reading data from inaccessible varibles
	*/

	public function __get($key){
		return $this->vars[$key];
	}


	/*
	*
	* Set template variables
	*/


	public function __set($key, $value){
		$this->vars[$key] = $value;
	}

	# Magic method toString allows us tot treat an object as a string

	public function  __tostring(){

		extract($this->vars);
		chdir(dirname($this->template));
		ob_start();

		include basename($this->template);
		
		return ob_get_clean();
	}
}
?>