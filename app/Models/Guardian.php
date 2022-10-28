<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guardian extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'phone', 'payment_date', 'region_id', 'site'];

    public function region()
    {
        return $this->belongsTo(Region::class);
    }
}
