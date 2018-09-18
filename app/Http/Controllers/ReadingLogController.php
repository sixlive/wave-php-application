<?php

namespace App\Http\Controllers;

use App\ReadingLog;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Facades\App\SessionMessage;

class ReadingLogController extends Controller
{
    public function index()
    {
        return view('reading-log.index', [
            'readingLog' => ReadingLog::all()
                ->sortBy('read_date')
                ->groupBy(function ($entry) {
                    return $entry->read_date->format('n-j-Y');
                }),
        ]);
    }

    public function create()
    {
        $readingLog = new ReadingLog;
        $readingLog->read_date = now();

        return view('reading-log.create', [
            'readingLog' => $readingLog,
            'action' => route('reading-logs.store'),
            'method' => 'POST',
        ]);
    }

    public function store()
    {
        request()->validate([
            'read_date' => 'required',
            'book_title' => 'required',
        ]);

        request()->offsetSet(
            'read_date',
            Carbon::createFromFormat('m-d-Y', request('read_date'))->timestamp
        );

        $readingLog = ReadingLog::create(request()->only([
            'read_date',
            'book_title',
            'book_subtitle',
            'book_author',
        ]));

        session()->flash('message', SessionMessage::success('Entry successfully created.')->flash());

        return redirect()->route('reading-logs.index');
    }

    public function show($id)
    {
        return view('reading-log.show', [
            'readingLog' => ReadingLog::findOrFail($id)
        ]);
    }

    public function edit($id)
    {
        return view('reading-log.create', [
            'readingLog' => ReadingLog::findOrFail($id),
            'action' => route('reading-logs.update', $id),
            'method' => 'PUT',
        ]);
    }

    public function update($id)
    {
        request()->validate([
            'read_date' => 'required',
            'book_title' => 'required',
        ]);

        request()->offsetSet(
            'read_date',
            Carbon::createFromFormat('m-d-Y', request('read_date'))->timestamp
        );

        $readingLog = ReadingLog::findOrFail($id)->update(request()->only([
            'read_date',
            'book_title',
            'book_subtitle',
            'book_author',
        ]));

        session()->flash('message', SessionMessage::success('Entry successfully updated.')->flash());

        return redirect()->route('reading-logs.index');
    }

    public function destroy($id)
    {
        ReadingLog::findOrFail($id)->delete();

        session()->flash('message', SessionMessage::success('Entry successfully deleted.')->flash());

        return redirect()->route('reading-logs.index');
    }
}
