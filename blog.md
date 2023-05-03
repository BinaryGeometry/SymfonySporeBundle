There where several challenges when creating this module

composer dump-autoload

composer require "acme/test-bundle @dev"
=== "name": "acme/test-bundle",

this must be in a folder not the root path of the symfony composer json
    "repositories": [
        {
            "type": "path",
            "url": "../acme/test-bundle"
        }
    ],

bundles.php
return [
    ...
    Acme\Bundle\TestBundle\AcmeTestBundle::class => ['all' => true],
];

psr-4 requires trailing slashes
 "autoload": {
        "psr-4": {
            "Acme\\Bundle\\TestBundle\\": "src/"
        }
    },

    https://macrini.medium.com/how-to-create-service-bundles-for-a-symfony-application-f266ecf01fca