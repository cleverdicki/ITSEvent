<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

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
            'day' => 'required',
            'month' => 'required',
            'year' => 'required',
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
        $event->event_date = $request->day . '-' . $request->month . '-' . $request->year;
        $event->event_price = $request->event_price;
        $event->event_organizer = $request->event_organizer;
        $event->event_link = $request->event_link;
        $event->event_image = $imgName;
        $event->event_status = 'no';

        $saveImg->move(public_path() . '/img', $imgName);
        $event->save();

        return redirect('dashboard')->with('success', 'Event berhasil diajukan!');
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
        // $edit = Event::findorfail($event);
        return view('event.updateEvent', compact('event'));
    }

    public function editStore(Request $request, $id)
    {
        $edit = Event::findorfail($id);
        $updateImg = $edit->event_image;

        if ($request->event_image != null) {
            $request->event_image->move(public_path() . '/img', $updateImg);
        }

        $data = [
            'event_name' => $request['event_name'],
            'event_desc' => $request['event_desc'],
            'event_date' => $request['day'] . '-' . $request['month'] . '-' . $request['year'],
            'event_price' => $request['event_price'],
            'event_organizer' => $request['event_organizer'],
            'event_link' => $request['event_link'],
            'event_image' => $updateImg,
            'event_status' => 'no',
        ];

        $edit->update($data);
        return redirect('listEvent')->with('success', 'Event berhasil diupdate!');
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

        return redirect('dashboard')->with('success', 'Event berhasil ditampilkan!');
    }

    public function updateNo($event)
    {
        $update = Event::findorfail($event);
        $update->event_status = 'no';
        $update->save();

        return redirect('dashboard')->with('info', 'Event disembunyikan!');
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
        return redirect('listEvent')->with('warning', 'Event telah dihapus!');
    }
}