<?php

namespace App\Http\Controllers;

use App\Models\Achievement;
use Illuminate\Http\Request;

class AchievementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $achievements = Achievement::orderBy('id', 'desc')->paginate(1000);
        return view("achievement.index", compact(['achievements']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('achievement.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'tanggal' => 'required',
            'kejuaraan' => 'required',
            'urutan' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }
    
        Achievement::create($input);
     
        return redirect()->route('achievement.index')
                        ->with('success','List penghargaan berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Achievement  $achievement
     * @return \Illuminate\Http\Response
     */
    public function show(Achievement $achievement)
    {
        return view('achievement.show', compact('achievement'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Achievement  $achievement
     * @return \Illuminate\Http\Response
     */
    public function edit(Achievement $achievement)
    {
        return view('achievement.edit', compact('achievement'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Achievement  $achievement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Achievement $achievement)
    {
        $request->validate([
            'nama' => 'required',
            'tanggal' => 'required',
            'kejuaraan' => 'required',
            'urutan' => 'required',
          ]);

          $input = $request->all();
  
          if ($image = $request->file('image')) {
              $destinationPath = 'images/';
              $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
              $image->move($destinationPath, $profileImage);
              $input['image'] = "$profileImage";
          }else{
              unset($input['image']);
          }
            
          $achievement->update($input);
      
          return redirect()->route('achievement.index')
                          ->with('success','Foto berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Achievement  $achievement
     * @return \Illuminate\Http\Response
     */
    public function destroy(Achievement $achievement)
    {
        $achievement->delete();
     
        return redirect()->route('achievement.index')
                        ->with('success','Berhasil dihapus');
    }
}
