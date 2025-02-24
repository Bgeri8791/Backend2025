<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApiKey extends Model
{
    use HasFactory;
    protected $fillable = ['key', 'user'];

    public static function generate()
    {
        return bin2hex(random_bytes(32)); // 64 karakteres kulcs
    }
}
