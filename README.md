# laravel-starter-template

Laravel starter template

## APi

If your application will also offer a stateless API, you may enable API routing using the install:api Artisan command:
```
php artisan install:api
```

Files:
```
/bootstrap/app.php => api: __DIR__.'/../routes/api.php',,
/config/sanctum.php => new,
/database/migrations/personal_access_tokens.php => new,
/routes/api.php => new,
/composer.json => "laravel/sanctum",
```

## Broadcasting

By default, broadcasting is not enabled in new Laravel applications. You may enable broadcasting using the install:broadcasting Artisan command:
```
php artisan install:broadcasting
```

Files:
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
