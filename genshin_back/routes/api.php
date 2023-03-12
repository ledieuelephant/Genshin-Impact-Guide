<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Guides;
use App\Models\Artifact;
use App\Models\HowToPlay;
use App\Models\Team;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('cors')->post('/guide', function (Request $request) {
    $guide = new Guides;
    $data = json_decode($request->data);
    $guide->title = $data->Titre;
    $guide->description = $data->Description;
    $guide->author = "Admin";
    // Save the image on the server
    $image = $request->file('image');
    $image->move(public_path('images'), $image->getClientOriginalName());
    $guide->image = $image->getClientOriginalName();
    $guide->save();
    // Save the artifacts
    foreach ($data->Artifact as $artifact) {
        $artifactModel = new Artifact;
        $artifactModel->guide_id = $guide->id;
        $artifactModel->title = $artifact->text;
        $artifactModel->save();
    }
    // Save the how to play
    foreach ($data->HowToPlay as $howToPlay) {
        $howToPlayModel = new HowToPlay;
        $howToPlayModel->guide_id = $guide->id;
        $howToPlayModel->title = $howToPlay->text;
        $howToPlayModel->save();
    }
    // Save the teams
    foreach ($data->Team as $team) {
        $teamModel = new Team;
        $teamModel->guide_id = $guide->id;
        $teamModel->title = $team->text;
        $teamModel->save();
    }
    return response()->json([
        'message' => 'Guide created successfully'
    ]);

});

Route::middleware('cors')->get('/guide/{id}', function (Request $request, $id) {
    // print on the console the request
    $guide = Guides::find($id);
    $guide->artifacts = Artifact::where('guide_id', $id)->get();
    $guide->howToPlay = HowToPlay::where('guide_id', $id)->get();
    $guide->teams = Team::where('guide_id', $id)->get();
    return response()->json($guide);
});

Route::middleware('cors')->get('/guides', function (Request $request) {
    // print on the console the request
    $guides = Guides::all();
    foreach ($guides as $guide) {
        $guide->artifacts = Artifact::where('guide_id', $guide->id)->get();
        $guide->howToPlay = HowToPlay::where('guide_id', $guide->id)->get();
        $guide->teams = Team::where('guide_id', $guide->id)->get();
    }
    return response()->json($guides);
});
