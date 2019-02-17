<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GivingChannel extends Model
{
    
    
    protected $fillable = [
        "channel",
        "active",
        "description",
    
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
        return url('/admin/giving-channels/'.$this->getKey());
    }

    
}
