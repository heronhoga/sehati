<?php

namespace App\Http\Controllers;

use App\Models\Health;
use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    function profileindex() {
        $user = new User();
        $health = new Health();
        $user = User::where('username', session('user_data.username'))->first();
        if ($user->name == null || $user->birthdate == null || $user->city == null) {
            return view('profile.completeprofile')->with('user', $user);
        }

        $dataUser = User::where('username', session('user_data.username'))->first();

        $latestHealth = Health::where('userid', session('user_data.id'))
        ->orderBy('updated_at', 'desc')
        ->first();

        $dataGraph = Health::where('userid', session('user_data.id'))
        ->orderBy('updated_at', 'desc')
        ->take(5)
        ->get(['updated_at', 'bmi', 'height', 'weight']);

        $labels = $dataGraph->pluck('updated_at')->reverse();
        $bmiData = $dataGraph->pluck('bmi')->reverse();
        $heightData = $dataGraph->pluck('height')->reverse();
        $weightData = $dataGraph->pluck('weight')->reverse();

    
        return view('profile.mainprofile', compact('labels', 'bmiData', 'heightData', 'weightData'))
        ->with('user', $dataUser)
        ->with('userHealthNow', $latestHealth)
        ->with('dataGraph', $dataGraph);
    }

    function completeprofile(Request $request) {
        $user = User::where('username', session('user_data.username'))->first();
        $health = new Health();
        // dd($request->all());

        $request->validate([
            'name' => 'required',
            'birthdate' => 'required',
            'height' => 'required|numeric',
            'weight' => 'required|numeric',
            'city' => 'required',
            'image' => 'required|image|mimes:jpeg,jpg,png|max:20480'
        ]);

        $file = $request->file('image');
        $filename = 'ava-' . time() . $file->getClientOriginalExtension();
        $path = $file->storeAs('public/avatar', $filename);
        $imgName = $filename; 

        $user->name = $request->name;
        $user->birthdate = $request->birthdate;
        $user->city = $request->city;
        $user->profilepic = $imgName;
        $user->save();

        $health->height = $request->height;
        $health->weight = $request->weight;
        $heightM = (float)$request->height / 100;

        $bmiCalc = (float)$request->weight / ($heightM * $heightM);
        $health->bmi = $bmiCalc;
        $health->updated_at = date("Y-m-d");
        $health->userid = session('user_data.id');
        $health->save();
        

        $dataUpdate = User::where('username', session('user_data.username'))->first();

        $latestHealth = Health::where('userid', session('user_data.id'))
        ->orderBy('updated_at', 'desc')
        ->first();

        $dataGraph = Health::where('userid', session('user_data.id'))
        ->orderBy('updated_at', 'desc')
        ->take(5)
        ->get(['updated_at', 'bmi', 'height', 'weight']);

        $labels = $dataGraph->pluck('updated_at')->reverse();
        $bmiData = $dataGraph->pluck('bmi')->reverse();
        $heightData = $dataGraph->pluck('height')->reverse();
        $weightData = $dataGraph->pluck('weight')->reverse();

        return redirect('profile')
        ->with('user', $dataUpdate)
        ->with('userHealthNow', $latestHealth)
        ->with('dataGraph', $dataGraph);

    }

    function updateHealth(Request $request){
        $health = new Health;

        $health->height = $request->height;
        $health->weight = $request->weight;
        $heightM = (float)$request->height / 100;

        $bmiCalc = (float)$request->weight / ($heightM * $heightM);
        $health->bmi = $bmiCalc;
        $health->updated_at = date("Y-m-d");
        $health->userid = session('user_data.id');
        $health->save();

        return redirect('profile');
        
    }
}
