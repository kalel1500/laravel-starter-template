import { Route } from 'laravel-ts-utilities';
import HomeController from '../src/home/infrastructure/HomeController';
import TestController from '../src/shared/infrastructure/TestController';
import SharedController from "../src/shared/infrastructure/SharedController";

export function defineRoutes(): void {
    Route.all([SharedController, 'layout'], []);

    Route.component([TestController, 'compare'], ['shared.test']);
    Route.page('shared.test', [TestController, 'test']);
    Route.page('home.index', [HomeController, 'index']);
}
