<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array<int, string>
     */
    protected $except = [
        '/clientes',
        '/clientes/*',
        '/posicions',
        '/posicions/*',
        '/prendas',
        '/prendas/*',
        '/articulos',
        '/articulos/*',
        '/trabajos',
        '/trabajos/*',
        '/estampados',
        '/estampados/*',
        '/pedidos',
        '/pedidos/*',
        '/imagens',
        '/imagens/*',
        '/controlForm2',
        '/controlForm2/*',
        '/controlForm3',
        '/controlForm3/*',
        '/first',
        '/first/*',
        '/second',
        '/second/*',
        '/third',
        '/third/*',
        '/modPedido',
        '/modPedido/*',
    ];
}
