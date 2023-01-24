<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chapter extends Model
{
    use HasFactory;

    protected $guarded = [
        'id'
    ];

    public function contents() {
        return $this->hasMany(KnowledgeContent::class);
    }
}
