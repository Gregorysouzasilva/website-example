<?php

  namespace App\Http\Controllers;

  use Illuminate\Http\Request;
  use Goutte\Client;
  use Symfony\Component\DomCrawler\Crawler;
  use App\Http\Requests;
  use App\Models\CanadaCollege;
  class ScraperController extends Controller
  {
  public function index()
  {
  //  Create a new Goutte client instance
    $client = new Client();

// //  Hackery to allow HTTPS
//    $guzzleclient = new \GuzzleHttp\Client([
//        'timeout' => 60,
//        'verify' => false,
//    ]);
//    $goutteClient->setClient($guzzleclient);

    $colleges = CanadaCollege::get()->take(1);

    foreach ($colleges as $college){
        $curso_id = $college->id_instituicao;
    // Create DOM from URL or file
        $crawler = $client->request('GET', "http://tools.canlearn.ca/cslgs-scpse/cln-cln/rep-fit/cu/af.cu.cldet.do?langen&instID=$curso_id&start=0&finish=19&instType=B&instLang=A&searchType&section=1&searchString=greystone&institution_id=default&&details=print");

$crawler->filter('section')->each(function ($node) {
    $dt = $node->filter('dt');
    echo "<h1>AQUI</h1>";
    print_r($dt);
    //print "|".$node->html()."|";
});

//    // Find all images
//    foreach ($html->find('section') as $element) {
//        dd($element);
//        //echo $element->src . '<br>';
//    }

//    // Find all links
//    foreach ($html->find('a') as $element) {
//        echo $element->href . '<br>';
//    }
  }
  }
}