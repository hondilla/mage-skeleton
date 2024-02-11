<?php

use App\Api\Infrastructure\Http\Controllers\Auth\Auth;

\Illuminate\Support\Facades\Route::post('login', [Auth::class, 'login']);
\Illuminate\Support\Facades\Route::post('tfa', [Auth::class, 'tfa']);
\Illuminate\Support\Facades\Route::post('tfa/email', [Auth::class, 'email']);
\Illuminate\Support\Facades\Route::post('magic', [Auth::class, 'magicLink']);
\Illuminate\Support\Facades\Route::middleware('signed')->post('magic/validate', [Auth::class, 'validate'])->name('auth.magic-link.validate');
