<?php

// ======================================================================================
// = Model template for active record http://www.phpactiverecord.org/projects/main/wiki =
// ======================================================================================
class Campaign extends ActiveRecord\Model { 

	static $has_many = array(
      array('videos', 'foreign_key' => 'campaign_id'),
      array('images', 'foreign_key' => 'campaign_id')
    );

}

?>