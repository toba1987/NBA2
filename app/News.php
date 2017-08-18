<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
	protected $table = 'news';  // ovo mora kada je ima modela i migracije u mnozini 

	public function user()
	{

    return $this->belongsTo(User::class);

	}

	public function teams()
	{
		return $this->belongsToMany(Team::class, 'news_teams');
	}


}
