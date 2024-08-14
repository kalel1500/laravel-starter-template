<?php

declare(strict_types=1);

namespace Src\Tests\Infrastructure;

use Illuminate\Http\Request;
use Thehouseofel\Hexagonal\Infrastructure\Controllers\Controller;
use Throwable;

final class TestController extends Controller
{
    public function testJsonErrors(Request $request)
    {
        $isJsonError = $request->input('isJsonError') === "1";
        $isDomain = $request->input('isDomain') === "1";
        $debug = $request->input('debug') === "1";

        if (!$debug) {
            config(['app.debug' => false]);
        }

        if (!$isJsonError) {
            if ($isDomain) {
                abortC(400, 'error de dominio automatico');
            }
            throw new \Exception('error de laravel automatico');
            abort(500, 'error de laravel automatico');
        }

        try {

            if ($isDomain) {
                abortC(400, 'error de dominio con "responseJsonError"');
            }
            throw new \Exception('error de laravel responseJsonError');
            abort(400, 'error de laravel con "responseJsonError"');

            return responseJson(true, 'success');
        } catch (Throwable $e) {
            return responseJsonError($e);
        }

    }
}
