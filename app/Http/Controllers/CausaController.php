<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Causa;
use Illuminate\Support\Facades\Auth;


class CausaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getEvent($id)
    {
        $token = Auth::user()->token;
        $client = new \GuzzleHttp\Client();

        $eventDetails = $client->request("GET", "https://graph.facebook.com/v2.8/" . $id . '?access_token=' . $token)->getBody()->getContents();

        $eventPhoto = $client->request("GET", "https://graph.facebook.com/v2.8/" . $id . '?fields=cover&access_token=' . $token)->getBody()->getContents();

        return view('create_initiative', ['eventDetails' => $eventDetails, 'picture' => $eventPhoto]);
    }

    public function index()
    {
        $causas = Causa::all();

        return View::make('causas.index')
            ->with('causas', $causas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View::make('causas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = array(
            'description' => 'required',
            'gather_point_lat' => 'required',
            'gather_point_lng' => 'required',
            'gather_point_street' => 'required',
            'city' => 'required',
            'department' => 'required',
            'work_zone_lat' => 'required',
            'work_zone_lng' => 'required',
            'work_zone_radious' => 'required',
            'expected_volunteers' => 'required',
            'picture' => 'required',
            'start_time' => 'required',
            'end_time' => 'required'
        );

        $validator = Validator::make(Input::all(), $rules);

        if($validator->fails()) {
            return Redirect::to('/')
                ->withErrors($validator);
        }else{
            $causa = new Causa;
            $causa->description = Input::get('description'); 
            $causa->gather_point_lat = Input::get('gather_point_lat'); 
            $causa->gather_point_lng = Input::get('gather_point_lng'); 
            $causa->gather_point_street = Input::get('gather_point_street'); 
            $causa->city = Input::get('city'); 
            $causa->department = Input::get('department'); 
            $causa->work_zone_lat = Input::get('work_zone_lat'); 
            $causa->work_zone_lng = Input::get('work_zone_lng'); 
            $causa->work_zone_radious = Input::get('work_zone_radious'); 
            $causa->expected_volunteers = Input::get('expected_volunteers'); 
            $causa->picture = Input::get('picture'); 
            $causa->start_time = Input::get('start_time'); 
            $causa->end_time = Input::get('end_time');
            $causa->save();

            Session::flash('message', '¡Subido con éxito!');
            return Redirect::to('/');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //TO-DO
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //TO-DO
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $causa = Causa::find($id);
        $causa->delete();

        Session::flash('message', 'Borrado correctamente');
        return Redirect::to('/');
    }
}
