# SudoBible-Laravel
Laravel Service Provider for [SudoBible](https://github.com/Root-XS/SudoBible).

## Installation & Setup

Install the SudoBible Service Provider via [Composer](http://getcomposer.org)
by adding the `rootxs/sudobible-laravel` package to the `require` object in
your project's `composer.json`.

```json
{
	...
	"require": {
		"rootxs/sudobible-laravel": "dev-master"
	},
	...
}
```

*NOTE:* This package automatically requires `rootxs/sudobible`, so you do NOT
have to add it separately to your `composer.json`.

Then run `composer update`.

Next, add the SudoBible Service Provider to the `providers` array in `config/app.php`.

```php
    'providers' => array(
        ...
        'RootXS\SudoBibleServiceProvider',
    )
```

Add the SudoBible facade to the `aliases` array in `config/app.php`.

```php
    'aliases' => array(
        ...
        'SudoBible' => 'RootXS\SudoBibleFacade',
    )
```

## Configuration

The following environment variables are used to configure SudoBible:
```
SUDOBIBLE_DB_HOST
SUDOBIBLE_DB_USER
SUDOBIBLE_DB_PASS
SUDOBIBLE_DB_NAME
SUDOBIBLE_TRANSLATION // optional
```

### Optional

To customize the configuration options, publish the configuration file using Artisan:

```sh
php artisan vendor:publish
```

Update your settings in the generated `app/config/sudobible.php` configuration file.

## Usage

```php
SudoBible::verse('John', 3, 16);
```
