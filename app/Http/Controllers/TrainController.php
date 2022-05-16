<?php

namespace App\Http\Controllers;

use App\Train;

use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function index(){
        $trainsModel = new Train();
        $trains = $trainsModel::paginate(20);

        $getTime = Train::where('departureTime', '=' , '2022-05-13 00:00:00')->get();   

        return view('trains.index', ['trains' => $trains, 'getTime' => $getTime]);
    }

    public function show($id){
        $train = Train::findOrFail($id);

        return view('trains.show', ['train' => $train]);
    }
}
