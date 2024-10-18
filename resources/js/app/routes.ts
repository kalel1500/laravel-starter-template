import { Route } from 'laravel-ts-utilities';
import HomeController from '../src/home/infrastructure/HomeController';
import TestController from '../src/shared/infrastructure/TestController';
import SharedController from "../src/shared/infrastructure/SharedController";

export function defineRoutes(): void {
    Route.page('shared.compare', [SharedController, 'compare']);
    Route.page('shared.testJs', [TestController, 'testJs']);
    Route.page('home.example1', [HomeController, 'example1']);
}
