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
    // $series = Series::all();
    $series = Series::query()->orderBy('name')->get();
    // var_dump($series);
    $message = $request->session()->get('message');
    $request->session()->remove("message");

    return view('series.index', compact('series', 'message'));
  }

  public function create(){
    return view('series.create');
  }

  public function store(Request $request){

    $request->validate([
      'name' => 'required|min:2'
    ]);

    $name = $request->name;
    $watched = $request->watched;

    // $serie = new Series();
    // $serie->name = $name;
    // $serie->watched = $watched;
    // $serie->save();

    $serie = Series::create([
      'name' => $name,
      'watched' => $watched,
    ]);

    $request->session()->flash('message', "Serie {$serie->id} - {$serie->name} created successfully!");
    // $request->session()->put('message', "Serie {$serie->id} - {$serie->name} created successfully!");

    // Series::create($request->all());

    return redirect('/series');
}

public function destroy(Request $request){
  Series::destroy($request->id);
  $request->session()->flash('message', "Serie removed successfully!");
  return redirect('/series');
}
}
?>