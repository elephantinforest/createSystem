<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\User;

class Register extends Model
{
    use HasFactory;
    public function user() {
        $this->belongsTo(User::class);
    }
}
