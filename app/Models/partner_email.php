<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @OA\Schema(
 *     schema="PartnerEmail",
 *     title="Partner Email",
 *     description="Partner email model",
 *     @OA\Property(property="partner_name", type="string", example="teszt ceg"),
 *     @OA\Property(property="partner_email", type="string", example="partner@example.com"),
 * )
 */

class partner_email extends Model
{
    use HasFactory;

    protected $fillable = ['partner_name','partner_email'];
}
