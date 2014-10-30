<?php

class DarkChocolate extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	//$timestamps = false;
	protected $table = 'DarkChocolate';

	/**
		Setting status for Chocolate fields.... mmmm, chocolate fields
	 **/
	protected $fillable = array('ChocolateType', 'Preference');
	protected $guarded = array('id');


	/*public function getAuthIdentifier(){
		return $this->getKey();
	}*/
	public static function getAll(){
		return DB::select('select * from DarkChocolate');
	}
	/*
	public function getid(){
		return $this->id;
	}
	public function getPreference(){
		return $this->Preference;
	}
	public function setChocolate($chocolate){
		
	}
	public function setPreference($chocolate, $preference){
	}
	public function deleteChocolate($chocolate){
	}*/
}
