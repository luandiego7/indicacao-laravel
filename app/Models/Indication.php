<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Indication extends Model
{
    use HasFactory;

    const STATUS_INITIALIZED = 1;
    const STATUS_PROCESS     = 2;
    const STATUS_FINISH      = 3;

    protected $table   = 'indications';
    protected $fillable = [ 'user_id', 'name', 'cpf', 'email', 'phone', 'product', 'status'];
}
