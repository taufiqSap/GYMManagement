<?php

namespace App\Models;

use App\Models\Members;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Trainers extends Model
{
    use HasFactory;
    protected $table = 'trainers';
    protected $fillable = ['name','specialization','phone'];

    public function Members()
    {
        return $this->hasMany(Members::class);
    }
}
