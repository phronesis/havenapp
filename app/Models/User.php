<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    
    
    protected $fillable = [
        "firstname",
        "lastname",
        "email_verified_at",
        "email",
        "password",
        "phone",
        "birthday",
        "chapters_id",
    
    ];
    
    protected $hidden = [
        "password",
        "remember_token",
    
    ];
    
    protected $dates = [
        "email_verified_at",
        "created_at",
        "updated_at",
        "birthday",
    
    ];
    
    
    
    protected $appends = ['resource_url'];

    /* ************************ ACCESSOR ************************* */

    public function getResourceUrlAttribute() {
        return url('/admin/users/'.$this->getKey());
    }

    
}
