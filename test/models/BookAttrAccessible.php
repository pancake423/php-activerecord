<?php
class BookAttrAccessible extends ActiveRecord\Model
{
	static $pk = 'book_id';
	static $table_name = 'books';

	static $attr_accessible = ['author_id'];
	static $attr_protected = ['book_id'];
};
?>