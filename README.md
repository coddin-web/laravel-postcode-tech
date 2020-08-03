# 

[![Latest Version on Packagist](https://img.shields.io/packagist/v/coddin-web/laravel-postcode-tech.svg?style=flat-square)](https://packagist.org/packages/spatie/zipcode)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/coddin-web/laravel-postcode-tech/run-tests?label=tests)](https://github.com/spatie/zipcode/actions?query=workflow%3Arun-tests+branch%3Amaster)
[![Total Downloads](https://img.shields.io/packagist/dt/coddin-web/laravel-postcode-tech.svg?style=flat-square)](https://packagist.org/packages/spatie/zipcode)


This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require coddin-web/laravel-postcode-tech
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --provider="Coddin\Zipcode\ZipcodeServiceProvider" --tag="migrations"
php artisan migrate
```

You can publish the config file with:
```bash
php artisan vendor:publish --provider="Coddin\Zipcode\ZipcodeServiceProvider" --tag="config"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

``` php
$zipcode = new Coddin\Zipcode();
echo $zipcode->echoPhrase('Hello, Coddin!');
```

## Testing

``` bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security

If you discover any security related issues, please email freek@spatie.be instead of using the issue tracker.

## Credits

- [Falko Woudstra](https://github.com/falko100)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
