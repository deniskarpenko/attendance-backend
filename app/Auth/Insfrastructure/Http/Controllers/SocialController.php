<?php
declare(strict_types=1);

namespace App\Auth\Insfrastructure\Http\Controllers;

use Illuminate\Routing\Controller;

class SocialController extends Controller
{
    public function redirectToProvider()
    {
        return '';
    }
}
