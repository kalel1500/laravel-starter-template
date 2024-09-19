import {Route} from "laravel-ts-utilities";
import HomeController from "../src/home/infrastructure/HomeController";
import TestController from "../src/shared/infrastructure/TestController";

export function defineRoutes(): void {
    Route.page("shared.test", [TestController, "test"]);
    Route.page("home.index", [HomeController, "index"]);
}
