<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    //use HasFactory;
	protected $table = 'country';
	public $timestamps = true;
	protected $fillable = [
		'Code',
		'Name',
		'Continent',
		'Region',
		'IndepYear',
		'Population',
		'GovermentForm',
		'HeadOfState',
		'Code2',
		'created_at'
	];
}
