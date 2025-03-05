# Laravel Starter Template

This is a Laravel 12 starter template to quickly start applications with Hexagonal Architecture and DDD

- [**Start the Laravel app**](#start-the-Laravel-app)
- [**Preparing the Template**](#preparing-the-template)
    - [Install `laravel-hexagonal-and-ddd-architecture-utilities` package](#install-the-main-package-for-hexagonal-architecture-kalel1500laravel-hexagonal-and-ddd-architecture-utilities)
    - [Install `@kalel1500/laravel-ts-utils` package](#install-the-second-package-for-build-a-simple-front-kalel1500laravel-ts-utils)
- [**More info from Template packages that may be useful**](#more-info-from-template-packages-that-may-be-useful)
- [**Laravel Artisan packages explained**](#laravel-artisan-packages-explained)
- [**License**](#license)

# Start the Laravel app

To start the Laravel application (`in Laravel 12`) simply follow the following steps:

1. Remove the following lines from the ".gitignore" file:
   ```gitignore
   composer.lock
   package-lock.json
   ```
2. Copy the `.env.example` file to a new `.env` file
3. Rn the following commands:
   ```bash
   composer install
   npm install
   npm run build
   ```
4. Rn the following commands:
   ```bash
    php artisan key:generate
    php artisan migrate:fresh
   ```

# Installs two useful packages

## 1. Backend [`laravel-hexagonal-and-ddd-architecture-utilities`]

### Install the main package for hexagonal architecture 

This is the main package that allows us to easily program with hexagonal architecture and DDD and makes it easy to create the initial files.

```bash
composer require kalel1500/laravel-hexagonal-and-ddd-architecture-utilities:@beta
```

To create the initial package files you can run the following command:

```bash
php artisan kalion:start
```

> This command can receive two parameters:\
> `--reset` (false) \
> `--simple` (false) \
> By default the `simple` parameter is `false` and the following commands are automatically launched:
> ```bash
> npm install @kalel1500/laravel-ts-utils
> npx @kalel1500/laravel-ts-utils
> ```
> Therefore, it is not necessary to install the second package. \
> Otherwise, if you want to use Laravel's blade views, you will need to.

## 2. Frontend (**) [`laravel-ts-utils`]

> ** It is not necessary if you have executed the command `php artisan kalion:start` without the parameter `--simple`

### Install a second package to easily build views

If your application will have blade views using vanilla Javascript, the following package can be very useful.

To install the package you can use the following command:
```bash
npm install @kalel1500/laravel-ts-utils
```

By default, the initial front-end (TypeScript and Css) files are not created.

The package provides a command to create the necessary files

```bash
npx @kalel1500/laravel-ts-utils
```

After installing the package and bringing all the files, we have to compile again and then clear the views cache (in case the page has been entered before and has been cached without the icon)

```bash
npm run build
php artisan view:clear
```

# More info from Template packages that may be useful

Here is a list of packages that are interesting to use in this template

| Type            | Name                                   | Command                                                                                            |
|-----------------|----------------------------------------|----------------------------------------------------------------------------------------------------|
| *composer*:     | kalion                                 | `composer require kalel1500/laravel-hexagonal-and-ddd-architecture-utilities:@beta`                |
| *npm*:          | @kalel1500/laravel-ts-utils            | `npm install @kalel1500/laravel-ts-utils` && `npx @kalel1500/laravel-ts-utils`                     |
| --              | --                                     | --                                                                                                 |
| ~~*composer*:~~ | ~~ziggy~~ `[already installed]`        | ~~`composer require tightenco/ziggy`~~                                                             |
| ~~*npm*:~~      | ~~tailwind css~~ `[already installed]` | ~~`npm install -D tailwindcss postcss autoprefixer` && `npx tailwindcss init -p (don't execute)`~~ |
| --              | --                                     | --                                                                                                 |
| *artisan*:      | api                                    | `php artisan install:api`                                                                          |
| *artisan*:      | broadcasting                           | `php artisan install:broadcasting`                                                                 |


# Laravel Artisan packages explained

## Api (files are modified)

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

## Broadcasting (files are modified)

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

# License

The Laravel Starter Template is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
