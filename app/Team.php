<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    
    public function players()
    {

        return $this->hasMany(Player::class);
    }//end

    public function comments()
    {

        return $this->hasMany(Comment::class);
    }//end

    public function addComment($content)
    {
        $this->comments()->create(['content' => $content,'user_id' => auth()->user()->id]);
    }// end

    public function news()
    {
        return $this->belongsToMany(News::class, 'news_teams');
    }

    public function getRouteKeyName()
    {
        return 'name';  
    }






}//CLASS
