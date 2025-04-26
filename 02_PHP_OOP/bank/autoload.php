<?php
  spl_autoload_register(function (string $className) {
    $prefix = 'Bank\\';
    $baseDir = __DIR__ . DIRECTORY_SEPARATOR;

    if (strncmp($prefix, $className, strlen($prefix)) === 0) {
        $relativeClass = substr($className, strlen($prefix));
        $file = $baseDir . str_replace('\\', DIRECTORY_SEPARATOR, $relativeClass) . '.php';

        if (file_exists($file)) {
            require_once $file;
        } else {
            echo "Arquivo não encontrado: {$file}" . PHP_EOL;
            exit();
        }
    }
  });
?>