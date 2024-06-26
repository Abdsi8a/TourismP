<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Airline extends Model
{
    protected $fillable =['name'];
    use HasFactory;
    public function ticket(){
        return $this->hasMany(Ticket::class);
    }

}
