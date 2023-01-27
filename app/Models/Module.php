<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    use HasFactory;

    protected $guarded = [
        'id'
    ];

    // public function contents() {
    //     return $this->hasMany(KnowledgeContent::class, 'kelas_id');
    // }

    public function chapters() {
        return $this->hasMany(Chapter::class, 'kelas_id');
    }

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function efforts() {
        return $this->hasMany(Effort::class, 'kelas_id');
    }
}
