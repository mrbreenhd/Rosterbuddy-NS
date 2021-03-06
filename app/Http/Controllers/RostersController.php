<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Roster;
use App\User;
use App\Team;

class RostersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
        public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }
    public function index()
    {
        $rosters = Roster::all();
        $teams = Team::all();

        $unacc = "";
        $coms = "";
        $disrupt = "";
        $system = "";

        $tlcoms = "";
        $tldisrupt = "";
        $tlsystem = "";
        
        foreach($teams as $team){
            if($team->id == 1){
                $unacc = $team->color;
            }elseif($team->id == 2){
                $coms = $team->color;
                $tlcoms = $team->tl_color;
            }elseif($team->id == 3){
                $disrupt = $team->color;
                $tldisrupt = $team->tl_color;
            }elseif($team->id == 4){
                $system = $team->color;
                $tlsystem = $team->tl_color;
            }
        }

        return view('rosters.index', compact('rosters', 'teams', 'unacc', 'coms', 'disrupt', 'system', 'tlcoms', 'tldisrupt', 'tlsystem'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
