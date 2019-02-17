<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GivingRecord extends Model
{
    
    
    protected $fillable = [
        "amount",
        "currency",
        "giving_channel_id",
        "accounts_id",
    
    ];
    
    protected $hidden = [
    
    ];
    
    protected $dates = [
        "created_at",
        "updated_at",
    
    ];
    
    
    
    protected $appends = ['resource_url'];

    /* ************************ ACCESSOR ************************* */

    public function getResourceUrlAttribute() {
        return url('/admin/giving-records/'.$this->getKey());
    }

    
}
