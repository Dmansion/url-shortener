<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Url extends Model
{
	protected $fillable = [
		'url', 'shortened'
	];

	public $timestamps = false;

 
	public static 	function getUniqueShortUrl(){
		$shortened = str_random(5);
		if(static::whereShortened($shortened)->count() != 0){
			return static::getUniqueShortUrl();
		}
		return $shortened ;
	}
}
