<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EventsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $event = Event::all();
        return view('index', compact('event'));
    }

    public function dashboard()
    {
        $event = Event::all();
        return view('dashboard', compact('event'));
    }

    public function listEvent()
    {
        $event = Event::all();
        return view('admin.listEvent', compact('event'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('event.createEvent');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'event_name' => 'required',
            'event_desc' => 'required',
            'event_date' => 'required',
            'event_price' => 'required',
            'event_organizer' => 'required',
            'event_link' => 'required',
            'event_image' => 'required'
        ]);

        $saveImg = $request->event_image;
        $imgName = time() . rand(100, 999) . "." . $saveImg->getClientOriginalName();

        $event = new Event;
        $event->event_name = $request->event_name;
        $event->event_desc = $request->event_desc;
        $event->event_date = $request->event_date;
        $event->event_price = $request->event_price;
        $event->event_organizer = $request->event_organizer;
        $event->event_link = $request->event_link;
        $event->event_image = $imgName;
        $event->event_status = 'no';

        $saveImg->move(public_path() . '/img', $imgName);
        $event->save();

        return redirect('dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        return view('event.detailEvent', compact('event'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update($event)
    {
        $update = Event::findorfail($event);
        $update->event_status = 'yes';
        $update->save();

        return redirect('dashboard');
    }

    public function updateNo($event)
    {
        $update = Event::findorfail($event);
        $update->event_status = 'no';
        $update->save();

        return redirect('dashboard');
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy($event)
    {
        $delete = Event::findorfail($event);

        $file = public_path('/img/') . $delete->event_image;
        // Check for exsiting image
        if (file_exists($file)) {
            @unlink($file);
        }

        $delete->delete();
        return redirect('listEvent');
    }
}