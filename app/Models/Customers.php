<?php

namespace App\Models;

use App\Models\Members;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Customers extends Model
{
    use HasFactory;
    protected $table = 'customers';
    protected $fillable = ['name','email','phone,is_member'];

    public function Members()
    {
        return $this->hasOne(Members::class);
    }
}
