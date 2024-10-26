import { Route } from 'laravel-ts-utilities';
import HomeController from '../src/home/infrastructure/HomeController';

export function defineRoutes(): void {
    Route.page('home.index', [HomeController, 'index']);
}
