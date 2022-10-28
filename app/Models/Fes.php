<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fes extends Model
{
    use HasFactory;

    protected $fillable = ["site_id","DT","SSV2G","SSV3G","picture"];
    
}
