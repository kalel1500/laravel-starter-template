# Laravel Starter Template

A Laravel starter template.

## 1. Steps for preparing the template

### 1.1. Fix .gitignore file

Delete the last two lines of the `.gitignore` file as they are only there to prevent the package manager lock files from being saved in the template.
```gitignore
# delete
composer.lock
package-lock.json
```

### 1.2. Install Main packages

| Type        | Name                 | Command                                                                                         |
|-------------|----------------------|-------------------------------------------------------------------------------------------------|
| *composer*: | hexagonal            | `composer require kalel1500/laravel-hexagonal-and-ddd-architecture-utilities:@beta`             |
| *composer*: | ziggy                | `composer require tightenco/ziggy`                                                              |
| *npm*:      | tailwind css         | `npm install -D tailwindcss postcss autoprefixer`<br/>`npx tailwindcss init -p (don't execute)` |
| *npm*:      | laravel-ts-utilities | `npm install laravel-ts-utilities`<br/>`npx laravel-ts-utilities`                               |
| --          | --                   | --                                                                                              |
| *artisan*:  | api                  | `php artisan install:api`                                                                       |
| *artisan*:  | broadcasting         | `php artisan install:broadcasting`                                                              |

## 2. Package documentation

### 2.1. (composer) - laravel-hexagonal-and-ddd-architecture-utilities

```bash
composer require kalel1500/laravel-hexagonal-and-ddd-architecture-utilities:@beta
```

You must uncomment the package's ExceptionHandler in the `bootstap/app.php` file to enable package error handling.
```php
->withExceptions(function (Exceptions $exceptions) {
    $callback = \Thehouseofel\Hexagonal\Infrastructure\Exceptions\ExceptionHandler::getUsingCallback();
    $callback($exceptions);
})
```

### 2.2 (npm) - tailwindcss

```bash
npm install -D tailwindcss postcss autoprefixer
# npx tailwindcss init -p # (don't execute)
```

### 2.3 (npm) - laravel-ts-utilities

```bash
npm install laravel-ts-utilities
```

By default, the initial front-end (TypeScript and Css) files are not created.

The package provides a command to create the necessary files

```bash
npx laravel-ts-utilities # (create all files)
# or
npx laravel-ts-utilities typescript # (only create typescript files)
# or
npx laravel-ts-utilities tailwind # (only create tailwind files)
```

### 2.4 (artisan) - Api (files are modified)

If your application will also offer a stateless API, you may enable API routing using the install:api Artisan command:
```bash
php artisan install:api
```

Files that change:
```
/bootstrap/app.php => api: __DIR__.'/../routes/api.php',,
/config/sanctum.php => new,
/database/migrations/personal_access_tokens.php => new,
/routes/api.php => new,
/composer.json => "laravel/sanctum",
```

### 2.5 (artisan) - Broadcasting (files are modified)

By default, broadcasting is not enabled in new Laravel applications. You may enable broadcasting using the install:broadcasting Artisan command:
```bash
php artisan install:broadcasting
```

Files that change:
```
/bootstrap/app.php => channels: __DIR__.'/../routes/channels.php',
/config/broadcasting.php => new,
/config/reverb.php => new,
/resources/js/echo.js => new,
/routes/channels.php => new,
/composer.json => "laravel/reverb",
/package.json => "laravel-echo" and "pusher-js",
```

## 3. License

The Laravel Starter Template is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
