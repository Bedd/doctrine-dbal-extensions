# README
[![Build Status](https://travis-ci.org/Bedd/doctrine-dbal-extensions.svg?branch=master)](https://travis-ci.org/Bedd/doctrine-dbal-extensions) [![Latest Stable Version](https://poser.pugx.org/Bedd/doctrine-dbal-extensions/v/stable)](https://packagist.org/packages/Bedd/doctrine-dbal-extensions) [![Total Downloads](https://poser.pugx.org/Bedd/doctrine-dbal-extensions/downloads)](https://packagist.org/packages/Bedd/doctrine-dbal-extensions) [![Latest Unstable Version](https://poser.pugx.org/Bedd/doctrine-dbal-extensions/v/unstable)](https://packagist.org/packages/Bedd/doctrine-dbal-extensions) [![License](https://poser.pugx.org/Bedd/doctrine-dbal-extensions/license)](https://packagist.org/packages/Bedd/doctrine-dbal-extensions) [![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/Bedd/doctrine-dbal-extensions/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/Bedd/doctrine-dbal-extensions/?branch=master)

## Installation
The best way to install this library is to use [composer](https://getcomposer.org/).

```json
{
    "require": {
        "bedd/doctrine-dbal-extensions": "1.*"
    }
}
```

## Usage
### Getting a model
```php
$config = new \Doctrine\DBAL\Configuration();
$connectionParams = array(
    // other params... like the access
    'wrapperClass' => '\Bedd\Doctrine\Dbal\Connection',
);
$conn = \Doctrine\DBAL\DriverManager::getConnection($connectionParams, $config);
//variant #1 (need the wrapperClass)
$model1 = $conn->getModel('table_name');
//variant #2 (no need of the wrapperClass)
$model2 = new \Bedd\Doctrine\Dbal\Model('table_name', $conn);```

### Working with a model
```php
//@todo
```

## License
This library is available under the [MIT license](LICENSE).