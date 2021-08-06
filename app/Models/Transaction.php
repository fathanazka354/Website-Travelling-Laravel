<?php

namespace App\Models;

use App\Models\TravelPackage as ModelsTravelPackage;
use App\Models\TransactionDetails as ModelsTransactionDetails;
use App\Models\User as ModelsUser;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transaction extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'travel_packages_id', 'users_id', 'additional_visa', 'transaction_total', 'transaction_status'
    ];

    protected $hidden = [];

    public function travel_package()
    {
        return $this->belongsTo(ModelsTravelPackage::class, 'transactions_id', 'id');
    }
    public function details()
    {
        return $this->hasMany(ModelsTransactionDetails::class, 'travel_packages_id', 'id');
    }
    public function user()
    {
        return $this->belongsTo(ModelsUser::class, 'users_id', 'id');
    }
}