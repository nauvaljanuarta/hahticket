<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Event;
use App\Models\EventTicket;
use App\Models\EventCategory;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $assignedMenus = Auth::user()->jenisuser->menus()->pluck('menus.id')->toArray();
        $menus = Menu::with('children')->whereNull('parent_id')->get();
        return view('event.dashboard', compact('menus', 'assignedMenus'));
    }

    // function untuk category
    public function category()
    {
        $assignedMenus = Auth::user()->jenisuser->menus()->pluck('menus.id')->toArray();
        $menus = Menu::with('children')->whereNull('parent_id')->get();
        $categories = EventCategory::all();
        return view('event.category', compact('menus', 'assignedMenus', 'categories'));
    }
    public function storecategory(Request $request)
    {
        $request->validate([
            'category' => 'required|string',
            'description' => 'nullable|string',
        ]);

        EventCategory::create([
            'category' => $request->category,
            'description' => $request->description,
            'create_by' => Auth::user()->username,
            'update_by' => Auth::user()->username,
        ]);
        return redirect()->route('event.categories')->with('success', 'Event Category created successfully');
    }
    public function updatecategory(Request $request, EventCategory $eventCategory)
    {
        $request->validate([
            'category' => 'required|string|max:40',
            'description' => 'nullable|string',
        ]);

        $eventCategory->update([
            'category' => $request->category,
            'description' => $request->description,
            'update_by' => auth()->user()->username,
        ]);

        return redirect()->back()->with('success', 'Event Category updated successfully');
    }

    public function destroycategory(EventCategory $eventCategory)
    {
        $eventCategory->delete();
        return redirect()->back()->with('success', 'Event Category deleted successfully');
    }

    //function untuk events
    public function event()
    {
        $assignedMenus = Auth::user()->jenisuser->menus()->pluck('menus.id')->toArray();
        $menus = Menu::with('children')->whereNull('parent_id')->get();
        $events = Event::with(['category', 'organizer'])->get();
        return view('event.event', compact('menus', 'assignedMenus', 'events'));
    }

    public function createEvent()
    {
        $categories = EventCategory::all();
        $assignedMenus = Auth::user()->jenisuser->menus()->pluck('menus.id')->toArray();
        $menus = Menu::with('children')->whereNull('parent_id')->get();
        return view('event.create', compact('menus', 'assignedMenus', 'categories'));
    }

    public function storeEvent(Request $request)
    {
        $picPath = null;
        if ($request->hasFile('pic')) {
            $picPath = $request->file('pic')->store('event_pics', 'public');

            $event = Event::create([
                'event_name' => $request->event_name,
                'event_category' => $request->event_category,
                'penyelenggara' => Auth::id(),
                'description' => $request->description,
                'event_date' => $request->event_date,
                'event_link' => $request->event_link,
                'location' => $request->location,
                'pic' => $picPath,
                'capacity' => $request->capacity,
            ]);

            foreach ($request->ticket_name as $index => $ticket_name) {
                EventTicket::create([
                    'ticket_name' => $ticket_name,
                    'description' => $request->ticket_description[$index] ?? '0',
                    'event' => $event->id,
                    'price' => $request->ticket_price[$index],
                ]);
            }

            return redirect('/event/index')->with('success', 'Event created successfully!');
        }
    }

    public function updateevent(Request $request)
    {
    }

    public function destroyevent(Request $request)
    {
    }
}