<?php

declare(strict_types=1);

namespace Src\Shared\Infrastructure;

use Illuminate\Contracts\View\View;
use Thehouseofel\Hexagonal\Infrastructure\Controllers\Controller;

final class TestController extends Controller
{
    public function compare(): View
    {
        return view('pages.shared.compare');
    }
}
