<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReceiveGeneral extends Model
{
    use HasFactory;

    protected $table = 'receive_general';
    protected $fillable = [
        'brandname',
        'lotno',
        'expirydate',
        'cabinetno',
        'quantity',
        'quantityremaining',
        'suppliedby',
        'datereceived',
        'dataentryby',
    ];    
}
