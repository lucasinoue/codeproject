<?php

namespace CodeProject\Entities;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //
    protected $fillable = [

		'id',
		'owner_id', //chave estrangeira para users
		'client_id', //chave estrangeira para clients
		'name',
		'description',
		'progress',
		'status',
		'due_date'
	]; 
}
