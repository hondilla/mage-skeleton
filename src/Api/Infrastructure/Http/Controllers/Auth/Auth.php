<?php

namespace App\Api\Infrastructure\Http\Controllers\Auth;

use Mage\Framework\Auth\Http\Controllers\PasswordLessAuthController;

class Auth extends PasswordLessAuthController
{
    protected function clientId(): int
    {
        return 1;
    }

    protected function clientSecret(): string
    {
        return 'YIohKpRaizpUPokxEEiqZpe6hCea7fv4kTkK2BLR';
    }

    public function validateRouteName(): string
    {
        return 'auth.magic-link.validate';
    }
}
