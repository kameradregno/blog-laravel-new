<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Comments extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'post_id', 'content'
    ];

<<<<<<< HEAD
    
=======
    /**
     * Get the user associated with the Comments
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user(): HasOne
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
>>>>>>> 1ad8e31d48e4ea86f2161d374ed9fbc47c95a72e
}
