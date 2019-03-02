<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AccountType extends Model
{
    
    
    protected $fillable = [
        "type",
    
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
        return url('/admin/account-types/'.$this->getKey());
    }

    
}
