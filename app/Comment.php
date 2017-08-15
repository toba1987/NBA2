<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
	protected $fillable = ['content', 'team_id','user_id'];

    public function user()
    {
    	return $this->belongsTo(User::class);

    }// end
}
