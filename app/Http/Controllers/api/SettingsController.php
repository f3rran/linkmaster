<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Settings;

class SettingsController extends Controller
{


    public function show(){
        $user = auth()->user();

        $settings = Settings::where('user_id', $user->id)->first();

        if (!$settings) {
            $settings = new Settings();

            $settings->title = "";
            $settings->description = "";
            $settings->tipography = "";
        }

        return $settings;
    }

    public function store(Request $request){
        clock($request);
        $settings = Settings::findOrFail($request->data['form']['id']);
        $settings->fill($request->data['form']);

        $settings->save();

        return true;
    }

    public function store_pictures(Request $request){
        clock($request->file('header_pic'));

        $settings = Settings::where('user_id', auth()->user()->id)->first();

        $settings->addMedia($request->file('header_pic'))
                 ->toMediaCollection('header_pic');
        $settings->addMedia($request->file('background_pic'))
                 ->toMediaCollection('background_pic');
    }
}