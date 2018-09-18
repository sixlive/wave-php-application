@extends('layouts.app')

@section('page-nav')
    @include('reading-log.nav', ['links' => ['New Entry' => route('reading-logs.create')]])
@endsection

@section('content')
    <div>
        <h1 class="mb-2">Reading Log Entries</h1>
        @foreach($readingLog as $date => $logs)
            <div>
                <h2 class="my-4">{{ $date }}</h2>
                <ul class="list-reset">
                @foreach($logs as $entry)
                    <li class="pb-1">
                        {{ $entry->book_title }} {{ $entry->book_subtitle ? ' - '.$entry->book_subtitle : '' }}{{ $entry->book_author ? ' by '.$entry->book_author : '' }} - <a href="{{ route('reading-logs.edit', $entry) }}" class="text-blue hover:no-underline">Edit</a>
                    </li>
                @endforeach
                </ul>
            </div>
        @endforeach
    </div>
@endsection
