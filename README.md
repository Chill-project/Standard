Chill - Standard Project
========================

The Chill project is a fork of [symfony/symfony-standard]
(https://github.com/symfony/symfony-standard). This project has adapted the composer.json
file to adapt to chill installation.


1) Installing Chill
----------------------------------

### Use Composer (*recommended*)

As Symfony uses [Composer][2] to manage its dependencies, the recommended way
to create a new project is to use it.

If you don't have Composer yet, download it following the instructions on
http://getcomposer.org/ or just run the following command:

    curl -s http://getcomposer.org/installer | php

Then, use the `create-project` command to generate a new Symfony application:

    php composer.phar create-project chill-project/standard path/to/install

Composer will install Symfony and all its dependencies under the
`path/to/install` directory.

2) Checking your System Configuration
-------------------------------------

Before starting coding, make sure that your local system is properly
configured for Symfony.

Execute the `check.php` script from the command line:

    php app/check.php

The script returns a status code of `0` if all mandatory requirements are met,
`1` otherwise.

Access the `config.php` script from a browser:

    http://localhost/path-to-project/web/config.php

If you get any warnings or recommendations, fix them before moving on.


4) Getting started with Chill
-------------------------------

TODO

What's inside?
---------------

You may read the [Champs-Libres Blog](http://blog.champs-libres.coop) to learn about our project.
