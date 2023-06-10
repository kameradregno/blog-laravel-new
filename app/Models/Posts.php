<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Posts extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'id', 'user_id', 'title', 'slug', 'content', 'image'
    ];

    /**
     * Get the user that owns the Posts
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function scopeSelectBySlug($query, $title)
    {
        return $query->where('slug', $title);
    }
}
