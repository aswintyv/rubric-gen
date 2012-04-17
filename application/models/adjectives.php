<?php
require_once 'base_model.php';
class Adjectives extends Base_model {
	
	function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    
    protected function getTableName(){
		return 'adjectives';
	}


}