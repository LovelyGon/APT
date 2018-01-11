# Coollection
### Objectified Collection

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Coverage Status][ico-scrutinizer]][link-scrutinizer]
[![Quality Score][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]

Access your collection items as properties:

``` php
$collection->name

$collection->addresses->first()->street_name

$collection->flatten()->cars->reject(function($car) { return $car->name == 'ferrari' })->last()->model
```
## Why?

Answering with a question: which one is easier to look at?

``` php
collect(
    collect(
        collect(
            collect(
                $collection['cars']
            )->unique('constructor')['models']
        )->last()['model']
    )['colors']
)->first()['rgb']
```

or

``` php
$collection->cars->unique('constructor')->last()->model->colors->first()->rgb
```

## PHP Agnostic

This is an agnostic PHP package, which uses an extracted version of Laravel's Illuminate Collection, it's actually [tightenco/collect](https://github.com/tightenco/collect), modified to support object properties.

## Documentation

It's Laravel's Collection, you can check [its docs](https://laravel.com/docs/5.5/collections). The only difference is that you can access array keys as properties, like any other object.

## Changes to [tightenco/collect](https://github.com/tightenco/collect)

As it is still using [Illuminate's namespace](https://github.com/tightenco/collect/pull/56), which will conflict with **Illuminate\Support\Collection**, for those who need to use it in a Laravel project, this package has an [updater script](upgrade-collect.sh) which downloads tightenco/collect sources and change the namespace to [**Tightenco\Collect**](https://github.com/antonioribeiro/coolection/blob/master/src/package/Support/Tightenco/Collect/src/Tightenco/Collect/Support/Collection.php).  

## Install

Via Composer

``` bash
$ composer require pragmarx/coollection
```

## Usage

Instantiate, the class directly or using the helper:

``` php
$c = new Coollection(['first_name' => 'Barak Obama']);

$c = coollect(['first_name' => 'Barak Obama']);
``` 

Then you use it as an object:

``` php
echo $c->first_name;

// Barak Obama


echo $c->flip()->barak_obama == 'first_name' 
    ? 'true' 
    : 'false';

// true
```

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CODE_OF_CONDUCT](CODE_OF_CONDUCT.md) for details.

## Security

If you discover any security related issues, please email acr@antoniocarlosribeiro.com instead of using the issue tracker.

## Credits

- [Antonio Carlos Ribeiro](https://twitter.com/iantonioribeiro)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/pragmarx/coollection.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/pragmarx/coollection/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/pragmarx/coollection.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/pragmarx/coollection.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/pragmarx/coollection.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/pragmarx/coollection
[link-travis]: https://travis-ci.org/pragmarx/coollection
[link-scrutinizer]: https://scrutinizer-ci.com/g/pragmarx/coollection/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/pragmarx/coollection
[link-downloads]: https://packagist.org/packages/pragmarx/coollection
[link-author]: https://github.com/antonioribeiro
[link-contributors]: ../../contributors
