<?php

namespace App\Models;

use App\Models\Members;
use App\Models\Trainers;
use App\Models\Customers;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Members extends Model
{
    use HasFactory;
    protected $table = 'members';
    protected $fillable = ['customer_id','trainer_id','start_date','end_date','membership_type'];

    public function Trainers()
    {
        return $this->belongsTo(Trainers::class);
    }

    public function Customers()
    {
        return $this->belongsTo(Customers::class);
    }
}
