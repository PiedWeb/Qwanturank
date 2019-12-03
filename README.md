<p align="center"><a href="https://dev.piedweb.com">
<img src="https://raw.githubusercontent.com/PiedWeb/piedweb-devoluix-theme/master/src/img/logo_title.png" width="200" height="200" alt="Open Source PHP Package SEO" />
</a></p>

# Qwanturank : Compare Qwant and Google organic results

[![Latest Version](https://img.shields.io/github/tag/PiedWeb/Qwanturank.svg?style=flat&label=release)](https://github.com/PiedWeb/Qwanturank/tags)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat)](https://github.com/PiedWeb/Qwanturank/blob/master/LICENSE)
[![Build Status](https://img.shields.io/travis/PiedWeb/Qwanturank/master.svg?style=flat)](https://travis-ci.org/PiedWeb/Qwanturank)
[![Quality Score](https://img.shields.io/scrutinizer/g/PiedWeb/Qwanturank.svg?style=flat)](https://scrutinizer-ci.com/g/PiedWeb/Qwanturank)
[![Code Coverage](https://img.shields.io/scrutinizer/coverage/g/PiedWeb/Qwanturank.svg?style=flat)](https://scrutinizer-ci.com/g/PiedWeb/Qwanturank/code-structure)
[![Total Downloads](https://img.shields.io/packagist/dt/piedweb/qwanturank.svg?style=flat)](https://packagist.org/packages/piedweb/qwanturank)

Simple wrapper for `rOpenDev\Google` wich permits to compare **qwanturank** results.

Each day, results are updated on [qwanturankseo.com](https://qwanturankseo.com).

## Install

Via [Packagist](https://img.shields.io/packagist/dt/piedweb/qwanturank.svg?style=flat)

``` bash
$ composer require piedweb/qwanturank
```

## Usage

Harvest Methods :

```php
include __DIR__.'/../vendor/autoload.php';

var_dump(Qwanturank::compare()); // return an array with position,title,url,google

// change the kw
var_dump(Qwanturank::compare('pied web'));
```

## Contributing

Please see [contributing](https://dev.piedweb.com/contributing)

## Credits

- [PiedWeb](https://piedweb.com)
- [All Contributors](https://github.com/PiedWeb/:package_skake/graphs/contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE) for more information.

[![Latest Version](https://img.shields.io/github/tag/PiedWeb/Qwanturank.svg?style=flat&label=release)](https://github.com/PiedWeb/Qwanturank/tags)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat)](https://github.com/PiedWeb/Qwanturank/blob/master/LICENSE)
[![Build Status](https://img.shields.io/travis/PiedWeb/Qwanturank/master.svg?style=flat)](https://travis-ci.org/PiedWeb/Qwanturank)
[![Quality Score](https://img.shields.io/scrutinizer/g/PiedWeb/Qwanturank.svg?style=flat)](https://scrutinizer-ci.com/g/PiedWeb/Qwanturank)
[![Code Coverage](https://img.shields.io/scrutinizer/coverage/g/PiedWeb/Qwanturank.svg?style=flat)](https://scrutinizer-ci.com/g/PiedWeb/Qwanturank/code-structure)
[![Total Downloads](https://img.shields.io/packagist/dt/piedweb/qwanturank.svg?style=flat)](https://packagist.org/packages/piedweb/qwanturank)
