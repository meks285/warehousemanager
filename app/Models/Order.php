<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table = 'orders';
    protected $fillable = [
        'requestlocation',
        'siterefnumber',
        'cmsrefnumber',
        'orderdate',
        'locationcontactperson',
        'locationcontactphonenumber',
        'producttype',
        'brandname',
        'manufacturer',
        'packsize',
        'lotno',
        'wgtctn',
        'weight',
        'quantity',
        'remarks',
        'orderstatus',
        'issuestatus',
        'requestedby',
        'requestdate',
        'authorisedby',
        'dateauthorized',
        'issuedby',
        'issuedate',
    ];
}
