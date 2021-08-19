<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ship extends Model
{
    use HasFactory;

    public $table = 'ships';

    public $fillable = [
        'sender_name',
        'sender_company',
        'sender_address',
        'sender_city',
        'sender_state',
        'sender_country',
        'sender_phone',
        'sender_zipcode',
        'sender_email',
        'consignee_name',
        'consignee_company',
        'consignee_address',
        'consignee_city',
        'consignee_state',
        'consignee_country',
        'consignee_phone',
        'consignee_zipcode',
        'consignee_email',
        'packages',
        'packaging',
        'service_type',
        'description',
        'value',
        'weight',
        'step_no',
    ];

}
