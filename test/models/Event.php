<?php
class Event extends ActiveRecord\Model
{
	static $belongs_to = [
		'host',
		'venue'
	];

	static $delegate = [
		['state', 'address', 'to' => 'venue'],
		['name', 'to' => 'host', 'prefix' => 'woot']
	];
};
?>
