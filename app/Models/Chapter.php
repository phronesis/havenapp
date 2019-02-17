<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Chapter extends Model
{
    
    
    protected $fillable = [
        "chapter",
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
        return url('/admin/chapters/'.$this->getKey());
    }

    
}
