<?php

namespace App\Http\Controllers;

use App\Models\Journal;
use Illuminate\Http\Request;

class JournalController extends Controller
{
    public function index($user)
    {
        return Journal::where('user_id',$user)->get();
    }
    public function store(Request $request)
    {
        return Journal::create($request->all());
    }
    public function update(Request $request, Journal $journal)
    {
        $journal->update($request->all());

        return $journal;
    }
    public function destroy(Journal $journal)
    {
        $journal->delete();
        return $journal;
    }
}
