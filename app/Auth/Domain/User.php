<?php
declare(strict_types=1);

namespace App\Auth\Domain;

use Database\Factories\UserFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Sanctum\HasApiTokens;


/**
 * @property int $id
 * @property string $email
 * @property string $name
 * @property string $password
 */
class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;

    protected $fillable = ['name', 'email', 'password'];

    protected static function newFactory(): UserFactory
    {
        return UserFactory::new();
    }
}
