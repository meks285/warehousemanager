<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RecipientStock extends Model
{
    use HasFactory;
    protected $table = 'receive_recipientstock';
    protected $fillable = [
        'cmsrefnumber',
        'requestlocation',
        'brandname',
        'lotno',
        'quantityreceived',
        'quantityremaining',
        'expirydate',
        'receivedate',
    ];    
}
