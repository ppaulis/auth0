# auth0 module for Laminas Api Tools

Module to use jwt authentification, api resources and integrate in authentication process of Laminas Api Tools.

## Requirements
* [PHP](php.net) 7.2+
* [Auth0 PHP](https://github.com/auth0/auth0-PHP) 5.6+
* [laminas-api-tools/api-tools-mvc-auth](https://github.com/laminas-api-tools/api-tools-mvc-auth) 1.5+

## Installation
1. Installation with composer
```bash
composer require swarmtech/auth0:"^1.0"
```

2. Enable module for Laminas by adding `Swarmtech\\Auth0` in config/modules.config.php
```php
return [
    "Swarmtech\\Auth0",
];
```

3. Copy template configuration to your config autoload folder and modify it to your needs
```bash
cp ./vendor/swarmtech/auth0/config/auth0.config.php.dist ./config/autoload/auth0.config.php
```

## Feature
* Authenticate auth0 user request with an ID Token (JWT) in the authorization header against auth0.
* Authenticate current application against auth0 with client_credential authentication flow.
* Access auth0 resources like users, roles, client, email, tenant, stats, etc..
* Handler to use Redis as a cache while JWT Verification
* Adapter to use auth0 with Laminas Authentication and api-tools-mvc-auth
* Integration in the api-tools-mvc-auth to use auth0 as authentication system for Laminas Api Tools applications

## Issue reporting
If you have found a bug or if you have a feature request, please report them at this repository issues section.

## Author
[Gary Gitton](https://github.com/garygitton)

## License
This project is licensed under the MIT license. 
See the [LICENSE](https://github.com/swarmtech/auth0/blob/master/LICENSE) file for more info.
