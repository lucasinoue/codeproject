<?php

namespace CodeProject\Entities;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //
    protected $fillable = [

		'owner_id', //chave estrangeira para users
		'client_id', //chave estrangeira para clients
		'name',
		'description',
		'progress',
		'status',
		'due_date'
	]; 

	
	public function notes()
	{
		return $this->hasMany(ProjectNote::class);
	}

	public function client() {
		return $this->belongsTo(Client::class); 
	}

	public function owner() {
		return $this->belongsTo(User::class); 
	}

}
