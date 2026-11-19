<?php
namespace NamespaceTest\SubNamespaceTest;

class Page extends \ActiveRecord\Model
{
	static $belong_to = [
		['book', 'class_name' => \NamespaceTest\Book::class],
	];
}
?>
