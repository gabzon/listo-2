<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',

        'username',
        'biography',

        'birthday',
        'profession',
        'gender',

        'passport1',
        'passport2',
        'passport3',
        'passport4',
        'passport1_expiry',
        'passport2_expiry',
        'passport3_expiry',
        'passport4_expiry',

        'street_address',
        'address_info',
        'postal_code',
        'city',
        'state',
        'country',
        'lat',
        'lng',


        'mobile',
        'phone',


        'whatsapp',
        'viber',
        'wechat',
        'telegram',
        'fb_messenger',
        'ig_messages',
        'call',
        'sms',


        'facebook',
        'linkedin',
        'instagram',
        'youtube',
        'tiktok',
        'skype',
        'snapchat',
        'pinterest',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
