<?php

namespace foo\bar\biz;

class User extends \ActiveRecord\Model {
	static $has_many = [
		['user_newsletters'],
		['newsletters', 'through' => 'user_newsletters']
	];

}

class Newsletter extends \ActiveRecord\Model {
	static $has_many = [
		['user_newsletters'],
		['users', 'through' => 'user_newsletters'],
	];
}

class UserNewsletter extends \ActiveRecord\Model {
	static $belong_to = [
		['user'],
		['newsletter'],
	];
}

# vim: ts=4 noet nobinary
?>
