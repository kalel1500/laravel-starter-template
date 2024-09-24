# Laravel Starter Template

A Laravel starter template.

## Main packages

| Type        | Name                 | Command                                                                            |
|-------------|----------------------|------------------------------------------------------------------------------------|
| *composer*: | ziggy                | `composer require tightenco/ziggy`                                                 |
| *composer*: | hexagonal            | `composer require kalel1500/laravel-hexagonal-and-ddd-architecture-utilities@beta` |
| *npm*:      | laravel-ts-utilities | `npm install laravel-ts-utilities`                                                 |
| *artisan*:  | api                  | `php artisan install:api`                                                          |
| *artisan*:  | broadcasting         | `php artisan install:broadcasting`                                                 |

## Composer packages

### Ziggy

```bash
composer require tightenco/ziggy
```

### Laravel hexagonal and ddd architecture utilities

```bash
composer require kalel1500/laravel-hexagonal-and-ddd-architecture-utilities:@beta
```

## NPM packages

### Laravel TypeScript Utilities

By default, the initial front-end (TypeScript) files are not created.

They are generated when the laravel-ts-utilities package is installed.

```bash
npm install laravel-ts-utilities
```

If you want to force the file creation, you can run the following command:

```bash
node .\node_modules\laravel-ts-utilities\dist\scripts\postinstall.js
```

## Artisan packages  (files are modified)

### APi

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

### Broadcasting

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

## License

Laravel starter template is open-sourced software licensed under the [GNU General Public License v3.0](LICENSE).
