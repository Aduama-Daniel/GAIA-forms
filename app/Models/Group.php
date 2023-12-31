<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;

    protected $fillable = [
        'group_name',
        'total_members',
        'gender_inclusivity',
    ];

    public function members()
    {
        return $this->hasMany(Membership::class);
    }

    public function memberships()
    {
        return $this->hasMany(Membership::class);
    }
}
