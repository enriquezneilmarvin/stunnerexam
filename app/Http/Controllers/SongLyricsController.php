<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SongRequest;
use App\Songs;
use Carbon\Carbon;
use App\Artist;

class SongLyricsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $songs = Songs::all();
        $artists = Artist::all();
        return view("song.index", compact('songs', 'artists'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SongRequest $request)
    {
        $artist = Artist::find($request->artist_id);
        if($artist)
        {
            $songs = new Songs;
            $songs->title = $request->song_title;
            $songs->artist_id = $request->artist_id;
            $songs->lyrics = $request->song_lyrics;
            $songs->created_at = Carbon::now()->format("Y-m-d H:i:s");
            $songs->updated_at = Carbon::now()->format("Y-m-d H:i:s");
            $songs->save();

        }
        return redirect('song');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $song = Songs::find($id);
        return response()->json($song);
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
        $songs = Songs::find($id);
        if($songs)
        {
            if($request->song_title_edit != "")
            {
                $songs->title = $request->song_title_edit;
                $songs->artist_id = $request->artist_id_edit;
                $songs->lyrics = $request->song_lyrics_edit;
                $songs->updated_at = Carbon::now()->format("Y-m-d H:i:s");
                $songs->save();
            }
        }
        return redirect('song');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Songs::destroy($id);
        return redirect('song');
    }
}
