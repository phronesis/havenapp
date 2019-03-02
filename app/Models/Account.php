<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    
    
    protected $fillable = [
        "acc_number",
        "account_type_id",
        "account_status_id",
    
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
        return url('/admin/accounts/'.$this->getKey());
    }

    
}
