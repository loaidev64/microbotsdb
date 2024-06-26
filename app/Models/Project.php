<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'color',
        'type',
        'volunteer_id',
    ];

    /**
     * The volunteers that belong to the Project
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function volunteers(): BelongsToMany
    {
        return $this->belongsToMany(Volunteer::class, 'project_volunteer');
    }
}
