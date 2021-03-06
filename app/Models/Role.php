<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;
    /**
     * Get all of the users fe
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function users()    {
        return $this->hasMany(User ::class);
    }
}
