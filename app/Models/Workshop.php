<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Date;

class Workshop extends Model
{
    protected $table = "workshops";
    protected $fillable = ['start','end','event_id','name'];
}
