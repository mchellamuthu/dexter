<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Institute extends Model
{
    use Uuids;
    use softDeletes;
    public $incrementing = false;
    protected $fillable = [
          'institute_name','institute_logo','institute_cover_pic','address', 'city', 'state','country','post_code','institute_type','other_type','user_id'
      ];

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }
}
