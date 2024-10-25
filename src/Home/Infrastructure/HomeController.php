<?php

declare(strict_types=1);

namespace Src\Home\Infrastructure;

use Illuminate\Contracts\View\View;
use Thehouseofel\Hexagonal\Infrastructure\Controllers\Controller;

final class HomeController extends Controller
{
    public function example0(): View
    {
        return view('pages.home.example0');
    }

    public function example1(): View
    {
        return view('pages.home.example1');
    }

    public function example2(): View
    {
        return view('pages.home.example2');
    }

    public function example3(): View
    {
        return view('pages.home.example3');
    }
}
