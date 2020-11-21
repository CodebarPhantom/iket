<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserRequest extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'requests';

    protected $fillable = [
        'request_created_date', 
        'client_name', 
        'department_id', 
        'computer_id', 
        'break_id', 
        'kind_of_repair',
        'description'
    ];

    protected $hidden = [

    ];

    // public function followed_up_request(){
    //     return $this->hasOne(FollowedUpRequest::class);
    // }

    // public function verified_request(){
    //     return $this->hasOne(VerifiedRequest::class);
    // }

    public function break_type(){
        return $this->hasOne(BreakType::class, 'id', 'break_id');
    }

    public function computer(){
        return $this->hasOne(Computer::class, 'id', 'computer_id');
    }

    public function department(){
        return $this->hasOne(Department::class, 'id', 'department_id');
    }
}
