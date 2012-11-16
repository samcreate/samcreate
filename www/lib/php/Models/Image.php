<?php

// ======================================================================================
// = Model template for active record http://www.phpactiverecord.org/projects/main/wiki =
// ======================================================================================
class Image extends ActiveRecord\Model { 

	
	static $belongs_to = array(
      array('campaign', 'readonly' => true)
    );
}

?>