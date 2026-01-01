<?php

namespace App\Http\Controllers;

use App\Models\WaitlistEntry;
use Illuminate\Http\Request;

class WaitlistController extends Controller
{
    public function show()
    {
        return view('waitlist');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'email' => ['required', 'email', 'unique:waitlist_entries,email', 'max:255'],
            'first_name' => ['required', 'string', 'max:255'],
        ]);

        WaitlistEntry::firstOrCreate(
            ['email' => $validated['email']],
            [
                'first_name' => $validated['first_name'],
                'ip_address' => $request->ip(),
                'user_agent' => $request->userAgent(),
                'source' => $request->input('source'),
            ]
        );

        return redirect()->route('waitlist.show')->with('success', 'You\'re on the waitlist!');
    }
}
