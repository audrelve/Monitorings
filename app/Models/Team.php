<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    protected $fillable = ['team_leader','membre_un','membre_deux'];

    public function fes()
    {
        return $this->hasMany(FE::class);
    }

    public function maintenance()
    {
        return $this->hasOne(Maintenance::class);
    }

    public function equipement()
    {
        return $this->hasOne(Equipement::class);
    }
}
