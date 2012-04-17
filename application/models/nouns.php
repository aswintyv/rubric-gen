<?php
include 'base_model.php';
class Nouns extends Base_model {
	
	function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    
    protected function getTableName(){
		return 'nouns';
	}


}