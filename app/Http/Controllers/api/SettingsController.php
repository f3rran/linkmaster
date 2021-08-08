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

        $settings = Settings::findOrFail($request->data['form']['id']);
        $settings->fill($request->data['form']);

        $settings->save();

        return true;
    }
}