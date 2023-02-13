# Tomato cms

full CMS System to manage your conetent build for Tomato PHP

## Installation

```bash
composer require tomatophp/tomato-cms
```
after install your package please run this command

```bash
php artisan tomato-cms:install
```

## Publish Assets

you can publish config file by use this command

```bash
php artisan vendor:publish --tag="tomato-cms-config"
```

you can publish views file by use this command

```bash
php artisan vendor:publish --tag="tomato-cms-views"
```

you can publish languages file by use this command

```bash
php artisan vendor:publish --tag="tomato-cms-lang"
```

you can publish migrations file by use this command

```bash
php artisan vendor:publish --tag="tomato-cms-migrations"
```

## Support

you can join our discord server to get support [TomatoPHP](https://discord.gg/Xqmt35Uh)

## Docs

you can check docs of this package on [Docs](https://docs.tomatophp.com/plugins/laravel-package-generator)

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Security

Please see [SECURITY](SECURITY.md) for more information about security.

## Credits

- [Tomatophp](mailto:info@3x1.io)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
