<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class feedback extends Model
{
    //Table Name
    protected $table = "feedback"; 
    //All columns
    protected $fillable = [
    	"id",
    	"pat_id",
        "pat_name",
    	"admin_id",
        "feedback",
    	"comment",
    	"status",
        "created_at",
        "updated_at"
    ];

}
