<?php
class Person extends ActiveRecord\Model
{
	// a person can have many orders and payments
	static $has_many = [
		['orders'],
		['payments']];

	// must have a name and a state
	static $validates_presence_of = [
		['name'], ['state']];
}
?>
