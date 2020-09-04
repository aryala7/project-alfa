<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
    "/1372300109:AAHnwKZBUCNEXe3nzIskV5cSYSUv1E_PgRg/webhook"
        //
    ];
}
