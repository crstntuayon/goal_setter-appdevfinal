<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use App\Models\Goal;

class Note extends Model
{
    //
   public function goal()
{
    return $this->belongsTo(Goal::class);
}
   protected $fillable = ['content'];
    protected $table = 'notes';

}