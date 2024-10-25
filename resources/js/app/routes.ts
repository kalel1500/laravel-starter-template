import { Route } from 'laravel-ts-utilities';
import HomeController from '../src/home/infrastructure/HomeController';
import SharedController from "../src/shared/infrastructure/SharedController";

export function defineRoutes(): void {
    Route.page('shared.compare', [SharedController, 'compare']);
    Route.page('home.example1', [HomeController, 'example1']);
}
