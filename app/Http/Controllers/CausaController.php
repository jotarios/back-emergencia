<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Validator;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use App\Causa;
use Illuminate\Support\Facades\Auth;


class CausaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $causas = Causa::all();
        
        return view('home', ['causas' => $causas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id = null)
    {
        $token = Auth::user()->token;
        $client = new \GuzzleHttp\Client();

        try {
            $eventDetails = json_decode($client->request("GET", "https://graph.facebook.com/v2.8/" . $id . '?access_token=' . $token)->getBody()->getContents(),true);
            //dd($eventDetails);
            $eventPhoto = json_decode($client->request("GET", "https://graph.facebook.com/v2.8/" . $id . '?fields=cover&access_token=' . $token)->getBody()->getContents(),true);
        }
        catch(\GuzzleHttp\Exception\ClientException $e) {
            $eventDetails = [];
            $eventPhoto = [];
        }

        return view('causas.create', ['eventDetails' => $eventDetails, 'picture' => $eventPhoto]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name'=> 'required',
            'description' => 'required',
            'gather_point_lat' => 'required',
            'gather_point_lng' => 'required',
            'city' => 'required',
            'work_zone_lat' => 'required',
            'work_zone_lng' => 'required',
            'expected_volunteers' => 'required',
            'picture' => 'required',
            'start_time' => 'required',
            'end_time' => 'required'
        ]);

        if($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator);
        }

        $causa = $request->all();
        $causa['start_time'] =  Carbon::createFromFormat('Y/m/d', $request->start_time_submit);
        $causa['end_time'] = Carbon::createFromFormat('Y/m/d', $request->end_time_submit);
        $causa = Causa::create($causa);

        $request->session()->flash('message', '¡Subido con éxito!');
        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

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
