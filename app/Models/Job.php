<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    /**
     *  Create a filter that help with the search
     */
    public function scopeFilter($query, array $filters)
    {
        // Check if the filter is empty
        if($filters['tag'] ?? false)
        {
            $query->where('tags', 'like', '%' . request('tag') . '%');
        }

        if($filters['search'] ?? false)
        {
            $query->where('title', 'like', '%' . request('search') . '%')
                 ->orWhere('job_description', 'like', '%' . request('search') . '%')
                 ->orWhere('tags', 'like', '%' . request('search') . '%');
        }
    }

    /**
     * This create relationship with the user
     */
    public function user()
    {
        return $this->belongsTo(User::class);
        // only pass a 2nd filled if the pry key is not the user_id
        // return $this->belongsTo(User::class, 'user_id');
    }
}
