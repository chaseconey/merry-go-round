<?php

class Call extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
//		 'name' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = ['name', 'phone', 'notes', 'receiver_id', 'user_id'];

	public function creator() {
		return $this->belongsTo('User', 'user_id');
	}

	public function receiver() {
		return $this->belongsTo('Receiver');
	}

}
