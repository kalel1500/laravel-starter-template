import {Route} from "laravel-ts-utilities/dist/types/src";
import HomeController from "../src/home/infrastructure/HomeController";

export function defineRoutes(): void {
    Route.page('home.index', [HomeController, 'index'])
}
