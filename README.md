[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/WsdlToPhp/PackageColissimoPostage/badges/quality-score.png?b=develop)](https://scrutinizer-ci.com/g/WsdlToPhp/PackageColissimoPostage/?branch=develop)
[![TeamCity build status](https://teamcity.mikael-delsol.fr/app/rest/builds/buildType:id:PackageColissimoPostage_Build/statusIcon.svg)](https://github.com/WsdlToPhp/PackageColissimoPostage)
[![Latest Stable Version](https://poser.pugx.org/wsdltophp/package-colissimo-postage/v/stable)](https://packagist.org/packages/wsdltophp/package-colissimo-postage)
[![Dependency Status](https://www.versioneye.com/user/projects/56e426e4df573d003a5f5e9f/badge.svg?style=flat)](https://www.versioneye.com/user/projects/56e426e4df573d003a5f5e9f)
[![StyleCI](https://styleci.io/repos/53735115/shield)](https://styleci.io/repos/53735115)
[![Total Downloads](https://poser.pugx.org/wsdltophp/package-colissimo-postage/downloads)](https://packagist.org/packages/wsdltophp/package-colissimo-postage)

# PackageColissimoPostage
This package has been generated from the [Colissimo Postage Web Services](https://ws.colissimo.fr/sls-ws/SlsServiceWS?wsdl) WSDL using the [PackageGenerator](https://github.com/WsdlToPhp/PackageGenerator) project.

# Summary
- [Generating again the package](#generating-again-the-package)
- [How to use the generated package?](#how-to-use-the-generated-package)
    - [Install the project](#install-the-project)
    - [Learn from the tutorial](#learn-from-the-tutorial)
    - [Start from the samples](#start-from-the-samples)
        - [GenerateLabel](samples/GenerateLabel.php)
        - [GetProductInter](samples/GetProductInter.php)
- [Need support or having a question?](#need-support-or-having-a-question)

# Generating again the package
You can generate again the package's sources using the [generate.sh](generate.sh) script:
```bash
$ git clone https://github.com/WsdlToPhp/PackageColissimoPostage.git package-colissimo-postage
$ cd package-colissimo-postage
$ ./generate.sh
```

Then run (to get PHPStan):
```bash
$ composer update
```

 To learn how to customize the generated package, please read the PackageGenerator's [README](https://github.com/WsdlToPhp/PackageGenerator/blob/master/README.md).

# How to use the generated package?

## Install the project
```bash
$ git clone https://github.com/WsdlToPhp/PackageColissimoPostage.git package-colissimo-postage
$ cd package-colissimo-postage
$ composer update
```

## Learn from the tutorial
Start looking into the auto-generated [tutorial.php](tutorial.php) file. This file contains the starting code to use this package. In addition it contains all the operations provided by the Exchange Web Services and the way to call them.

## Start from the samples
Sample scripts are available under the [samples](samples) folder:

- [GenerateLabel](samples/GenerateLabel.php)
- [GetProductInter](samples/GetProductInter.php)

# Need support or having a question?
We can help you understand how to use it and how to customize it. Feel free to contact us at contact@wsdltophp.com.
