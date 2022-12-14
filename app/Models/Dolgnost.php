<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Dolgnost extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = "dolgnosts";
    protected $guarded = [];
    
    public function user()
    {
	    return $this->hasOne(User::class);	
    }
    
}
