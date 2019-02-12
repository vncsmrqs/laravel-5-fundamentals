<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Article extends Model
{
    public $fillable = [
        'title',
        'body',
        'published_at'
    ];

    public $dates = [
        'published_at'
    ];
    
    //Scope
    //scope*NomeDaFuncao*($query)

    public function scopePublished($query)
    {
        //dd($query);
        $query->where('published_at', '<=', Carbon::now());
    }

    public function scopeUnpublished($query)
    {
        //dd($query);
        $query->where('published_at', '>', Carbon::now());
    }

    //Mutator
    //set*NomeDoAtributo*Attribute($dados)
    public function setPublishedAtAttribute($date) 
    {
        $this->attributes['published_at'] = Carbon::createFromFormat('Y-m-d', $date);
    }

    //An article is owned by a user
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    
    public function tags()
    {
        return $this->belongsToMany('App\Tag');
    }

}
