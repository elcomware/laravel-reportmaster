# Laravel ReportMaster 
**A premium Laravel package designed to simplify and enhance reporting capabilities**

[![Latest Version on Packagist](https://img.shields.io/packagist/v/elcomware/laravel-reportmaster.svg?style=flat-square)](https://packagist.org/packages/elcomware/laravel-reportmaster)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/elcomware/laravel-reportmaster/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/elcomware/laravel-reportmaster/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/elcomware/laravel-reportmaster/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/elcomware/laravel-reportmaster/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/elcomware/laravel-reportmaster.svg?style=flat-square)](https://packagist.org/packages/elcomware/laravel-reportmaster)

ReportMaster is a premium Laravel package designed to simplify and enhance your reporting capabilities. 

Whether you need to generate complex reports from your database, export them in multiple formats, 
or simply view and print them, ReportMaster provides a robust and flexible solution.


## Support us

[<img src="https://github-ads.s3.eu-central-1.amazonaws.com/laravel-reportmaster.jpg?t=1" width="419px" />](https://spatie.be/github-ad-click/laravel-reportmaster)

We invest a lot of resources into creating [best in class open source packages](https://spatie.be/open-source). You can support us by [buying one of our paid products](https://spatie.be/open-source/support-us).

We highly appreciate you sending us a postcard from your hometown, mentioning which of our package(s) you are using. You'll find our address on [our contact page](https://spatie.be/about-us). We publish all received postcards on [our virtual postcard wall](https://spatie.be/open-source/postcards).

## Features
**Seamless Integration:** Easily integrate ReportMaster with your Laravel application to start generating reports with minimal setup.

**Multiple Export Formats:** Export your reports as PDF, Excel, and CSV files, providing flexibility for various use cases and preferences.

**Print and View:** View reports directly in your browser or print them for physical records.

**Customizable Templates:** Create and use custom templates for your reports to match your branding and specific layout requirements.

**User-Friendly Interface:** An intuitive interface that makes report generation accessible even for non-technical users.

## Installation

You can install the package via composer:

```bash
composer require elcomware/laravel-reportmaster
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="laravel-reportmaster-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="laravel-reportmaster-config"
```

This is the contents of the published config file:

```php
return [
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="laravel-reportmaster-views"
```

## Usage
Generating a report with ReportMaster is straightforward. Here is an example:
```php
$reportMaster = new Elcomware\ReportMaster();
echo $reportMaster->echoPhrase('Hello, Elcomware!');

use Elcomware\ReportMaster\Facades\ReportMaster;

$report = ReportMaster::create('Report Title')
    ->setData($data) // Your data here
    ->setTemplate('templateName') // Optional: Specify a template
    ->generate();

return $report->download('report.pdf'); // or ->view(), ->print(), ->export('excel'), ->export('csv')
```
## Customization

You can customize the appearance and layout of your reports by creating your own templates. 
Place your custom templates in the resources/views/reports directory.


## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Elcomware](https://github.com/elcomware)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). 
ReportMaster is open-source software licensed under the MIT license.

Please see [License File](LICENSE.md) for more information.

## Support
For any issues or feature requests, please open an issue on GitHub or contact our support team.
