<?php
  namespace App\Http\Controllers;
  use App\Series;
  use Illuminate\Http\Request;
  use Illuminate\Support\Facades\View;

  class SeriesController extends Controller
{
  // public function indexOld(Request $request){
  //   // echo $request->url(); //Show the URL
  //   // var_dump($request->query()); //Show all parameters passed by url

  //   $series = [
  //     'Suits',
  //     'Brooklyn 99',
  //     'Loki'
  //   ];

  //   // return view('series.index', [
  //   //   'series' => $series
  //   // ]);

  //   return view('series.index', compact('series'));
  // }

  public function index(Request $request){
    $series = Series::all();
    // var_dump($series);

    return view('series.index', compact('series'));
  }

  public function create(){
    return view('series.create');
  }

  public function store(Request $request){
    $name = $request->name;
    $watched = $request->watched;

    // $serie = new Series();
    // $serie->name = $name;
    // $serie->watched = $watched;
    // $serie->save();

    Series::create([
      'name' => $name,
      'watched' => $watched,
    ]);

    // Series::create($request->all());

    return redirect('/series');
}
}
?>