<?php

class Order extends ActiveRecord\Model
{
	// order belongs to a person
	static $belongs_to = [
	    ['person']];

	// order can have many payments by many people
	// the conditions is just there as an example as it makes no logical sense
	static $has_many = [
	    ['payments'],
	    [
	        'people',
	        'through' => 'payments',
	        'select' => 'people.*, payments.amount',
	        'conditions' => 'payments.amount < 200',
	    ]];

	// order must have a price and tax > 0
	static $validates_numericality_of = [
	    [
	        'price',
	        'greater_than' => 0,
	    ],
	    [
	        'tax',
	        'greater_than' => 0,
	    ]];

	// setup a callback to automatically apply a tax
	static $before_validation_on_create = ['apply_tax'];

	public function apply_tax()
	{
		if ($this->person->state == 'VA')
			$tax = 0.045;
		elseif ($this->person->state == 'CA')
			$tax = 0.10;
		else $tax = 0.02;

		$this->tax = $this->price * $tax;
	}
}
?>
