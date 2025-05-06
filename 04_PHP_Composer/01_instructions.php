<?php
  // To start with a new composer package at the terminal
  // composer init
  // After it, see the composer.json file
  // When you need to find a package to your project, access: https://packagist.org/
  // So, at the composer.json, at the require's field, you can put the packages that you need
  // In the package.org, when clicking on any package, see the documentation

  /*On this case, to thos project we need:
    composer require guzzlehttp/guzzle
    composer require symfony/dom-crawler

    Or you can put at the composer.json:
    "require": {
        "guzzlehttp/guzzle": "^7.9",
        "symfony/dom-crawler": "^7.2"
    }
    
    So, you run the command: composer install
    Or, if you need to update the version of the packages, run the command: composer update
  */


  /*
    "autoload": {
        "classmap": [//Do the class's autoload
            "./Teste.php"
        ],
        "files": [//Do the addictional file's autoload
            "./functions.php"
        ],
        "psr-4": {//Do the directories's autoload
            "Composer\\Src\\":"src/"
        }
    }
  */
  //composer dumpautoload - if you added an autoload command at the composer.json file, run this command to update

?>