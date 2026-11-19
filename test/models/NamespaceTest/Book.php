<?php
namespace NamespaceTest;

class Book extends \ActiveRecord\Model
{
	static $belongs_to = [
		['parent_book', 'class_name' => \NamespaceTest\Book::class],
		['parent_book_2', 'class_name' => 'Book'],
		['parent_book_3', 'class_name' => '\Book'],
	];

	static $has_many = [
		['pages', 'class_name' => \NamespaceTest\SubNamespaceTest\Page::class],
		['pages_2', 'class_name' => 'SubNamespaceTest\Page'],
	];
}
?>
