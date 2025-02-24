<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
/**
 * @OA\Info(
 *      title="Alkalmassagi-API dokumentáció",
 *      version="1.0.0",
 * )
 * @OA\Server(
 *      url="http://192.168.2.114:8881/",
 * )
* 
* @OA\SecurityScheme(
*     securityScheme="ApiKeyAuth",
*     type="apiKey",
*     in="header",
*     name="X-API-KEY"
* )
*/

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
}
