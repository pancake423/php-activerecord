<?php
class Host extends ActiveRecord\Model
{
	static $has_many = [
		'events',
		['venues', 'through' => 'events']
	];
}
?>
