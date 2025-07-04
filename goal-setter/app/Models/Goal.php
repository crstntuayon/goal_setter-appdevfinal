<?php

namespace App\Models;



use Illuminate\Database\Eloquent\Model;
use App\Models\Note;


class Goal extends Model
{
    //
    protected $fillable = ['title', 'description', 'target', 'progress'];


    public function notes()
{
    return $this->hasMany(Note::class);
}

}