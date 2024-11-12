<?php
declare(strict_types=1);

namespace App\Auth\Insfrastructure\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller;

class AuthController extends Controller
{
   public function login(
       string $data
   ): JsonResponse
   {
       return new JsonResponse([
           'data' => "Content Login"
       ]);
   }
}
