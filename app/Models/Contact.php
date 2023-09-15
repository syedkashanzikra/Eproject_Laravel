<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = 'contacts'; // Specify the actual table name in your database
    protected $fillable = ['Username', 'Userphone', 'Useremail', 'Usermessage'];
}
