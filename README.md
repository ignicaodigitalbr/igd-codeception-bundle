# Igd Codeception Bundle

### About

The IgdCodeceptionBundle adds a comfortable CLI interface to use Codeception and Selenium on Symfony2 Projects.
It provides a more fit and configurable way to manage codeception's tests and Selenium's dependencies of your application.

# Getting Started

### Install instructions

Installation is a little 2 step process:

1. Download IgdCodeceptionBundle using composer
2. Enable the Bundle

#### Step 1: Download IgdCodeceptionBundle using composer

Add IgdCodeceptionBundle by running the command:

```sh
$ php composer.phar require igd/codeception-bundle "~1.0"
```

#### Step 2: Enable the bundle

Enable the bundle in the kernel:

```php
<?php
// app/AppKernel.php

public function registerBundles()
{
    $bundles = array(
        // ...
        new Igd\CodeceptionBundle\CodeceptionBundle(),
    );
}
```

### Basic Usage

_todo_

For more details see [Documentation](Documentation).

# Contributing

All contributions are very welcomed, see [Contributing](Contributing.md) for detailed instructions.

# License

This project is under the MIT license, see [LICENSE](LICENSE) for more details.

# Credits

_This project binds a more comfortable way to play with [Codeception](http://codeception.com/) and [Selenium](http://www.seleniumhq.org/) on [Symfony](http://symfony.com/) based projects, they all are awesome projects that make the web development better, this is our way of thanking._
