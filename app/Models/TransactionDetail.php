<?php

namespace App\Models;

use App\Models\TravelPackage as ModelsTravelPackage;
use App\Models\Transaction as ModelsTransaction;
use App\Models\User as ModelsUser;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transaction extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'transactions_id', 'username', 'nationality', 'is_visa', 'doe_passport'
    ];

    protected $hidden = [];

    public function transaction()
    {
        return $this->belongsTo(ModelsTransaction::class, 'transactions_id', 'id');
    }
}