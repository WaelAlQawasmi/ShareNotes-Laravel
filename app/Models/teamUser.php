<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class teamUser extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'team_id ',
    ];

    protected $table = 'team_user';

    public function teamUsers(){

        return $this->belongsTo(User::class,'user_id');
    }


}
