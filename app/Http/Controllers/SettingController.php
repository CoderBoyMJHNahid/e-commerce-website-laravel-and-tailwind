<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        $data = Setting::first();
        return view('dashboard.settings',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $check = Setting::first();

        $check == null ? $data = new Setting() : $data = Setting::first();
        $data->api_url_sentrix = $request->api_url_sentrix;
        $data->sid = $request->sid;
        $data->token = $request->token;
        $data->twilio_number = $request->twilio_number;
        $data->send_number = $request->send_number;
        $data->send_number2 = $request->send_number2;
        $data->save();
        return redirect()->back()->with('status', 'Setting update successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
