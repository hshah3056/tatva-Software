<?php

namespace App\Http\Controllers;

use App\Event;
use Carbon\Carbon;
use Illuminate\Http\Request;

class EventController extends Controller
{

    public function create(Request $request)
    {
        /* store data for event */
        if ($request->isMethod('post'))
        {
            Event::create([
                'title' => $request->title,
                'start_at' => Carbon::parse($request->start_at)->toDateString(),
                'end_at' => Carbon::parse($request->end_at)->toDateString(),
                'recurrence' => json_encode([
                    'type' => [
                        $request->type
                    ],
                    'repeat' => [
                        $request->repeat_one,
                        $request->repeat_two,
                    ],
                    'repeat_on' => [
                        $request->repeat_on_one,
                        $request->repeat_on_two,
                        $request->repeat_on_three,
                    ]
                ])
            ]);

            return redirect()->back()->with(['success' => 'Your Record Submit SuccessFully..!']);
        }

        return view('welcome',[
            'events' => Event::paginate(3)
        ]);
    }

    public function delete(Request $request)
    {
        if ($request->isMethod('post')){
            $event = Event::whereId($request->id)->first();
            $event->delete();
            return redirect()->back()->with(['error' => 'Your Selected Record remove successfully..!!']);
        }
    }

}
