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

  //if you want to install all library without being dev dependencies you can:
  //1 - install a dev program: composer require --dev phpunit/phpunit
  //2 - put the command: composer install --no-dev
  
  /*
    If you need a program to see if your PHP project is well indented, run this:
    composer require --dev squizlabs/php_codesniffer

    So, with the command vendor\bin\phpcs --help show all command that you can use
    After, you use vendor\bin\phpcs --standard=PSR12 src\ "Or another directory" to find all error of identation
  */

  /*
      Phan - its a php tool to find all errors of programation
      composer require --dev phan/phan
      Now to use: vendor\bin\phan.bat --allow-polyfill-parser src\CoursesMethods.php
  */

  /*
      "scripts": {
        "cs": "phpcs --standard=PSR12 src\",
        "test": "phpunit src\\CoursesMethods.php"
      }
      
      It can do that you run a command at the terminal without a big command, so just use: composer cs
  */
  /*
      If you want to run some scripts at the same time, you can use the check key:
      
      "scripts": {
        "cs": "phpcs --standard=PSR12 src/",
        "test": "phpunit src\\CoursesMethods.php",
        "check":[
          "@cs",
          "@test"
        ]
      }

      composer check
  */
  /*
      If you want to put some descriptions about each script, you can:

      "scripts-descriptions": {
        "check": "Run all code verifications"
      }
  */
?>