<?php

  require "vendor/autoload.php";

  //Using the guzzle library to get any information of an website by tag
  use GuzzleHttp\Client;
  use Symfony\Component\DomCrawler\Crawler;

  $client = new Client();
  $answer = $client->request("GET", "https://www.alura.com.br/cursos-online-programacao/php");
  $html = $answer->getBody();

  $crawler = new Crawler();//You can pass the $html variable as a parameter too
  $crawler->addHtmlContent($html);

  $courses = $crawler->filter('span.card-curso__nome');

  foreach ($courses as $course) {
    print $course->textContent.PHP_EOL;
  }
?>