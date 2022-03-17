<?php

namespace App\Models;

use App\Models\Vendor;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Pic extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function vendor(){
        return $this->hasMany(Vendor::class);
    }
}
