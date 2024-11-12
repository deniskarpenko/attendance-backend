<?php
declare(strict_types=1);

namespace App\Auth\Insfrastructure\Http\Controllers;

use App\Auth\Application\DTO\LoginData;
use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller;
use function Symfony\Component\Translation\t;

class AuthController extends Controller
{
   public function login(
       LoginData $loginData
   ): JsonResponse
   {
       return new JsonResponse([
           'data' => print_r($loginData, true)
       ]);
   }
}
