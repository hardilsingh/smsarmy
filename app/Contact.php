<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    //

    protected $guarded = ['id', 'created_at', 'updated_at'];



    public function groupName() {
        return $this->belongsTo("App\Group" , 'group_id');
    }
}
