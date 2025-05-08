<?php
  namespace App\Http\Controllers;
  use Illuminate\Http\Request;
  use Illuminate\Support\Facades\View;

  class SeriesController extends Controller
{
  public function index(Request $request){
    // echo $request->url(); //Show the URL
    // var_dump($request->query()); //Show all parameters passed by url

    $series = [
      'Suits',
      'Brooklyn 99',
      'Loki'
    ];

    // return view('series.index', [
    //   'series' => $series
    // ]);

    return view('series.index', compact('series'));
  }

  public function create(){
    return view('series.create');
  }
}
?>