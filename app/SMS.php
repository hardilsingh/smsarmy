<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SMS extends Model
{
    //

    protected $guarded = ['id', 'created_at', 'updated_at'];


    public function userName()
    {
        return $this->belongsTo("App\User", 'user_id');
    }

    public static function sms($ph, $text)
    {
        $msg = $text;
        $number = '91' . $ph;
        $cSession = curl_init();
        curl_setopt($cSession, CURLOPT_URL, "http://my.msgwow.com/api/sendhttp.php?authkey=207485A7Y9ujYeSFT5ac45f4f&mobiles=$number&message=$msg&sender=CDACGP&route=1&country=91");
        curl_setopt($cSession, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($cSession, CURLOPT_HEADER, false);
        $alertchk = curl_exec($cSession);
    }
}
