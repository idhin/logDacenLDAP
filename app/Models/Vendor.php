<?php

namespace App\Models;

use App\Models\Pic;
use App\Models\Visitor;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Vendor extends Model
{
    use HasFactory;
    protected $guarded = [];
    
    public function visitor(){
        return $this->hasMany(Visitor::class);
    }

    public function pic(){
        return $this->belongsTo(Pic::class);
    }
}
