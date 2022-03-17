<?php

namespace App\Models;

use App\Models\Visitor;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Visitor extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function vendor(){
        return $this->belongsTo(Visitor::class);
    }
}
