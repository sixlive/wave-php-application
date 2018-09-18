@extends('layouts.app')

@section('content')
    <div>
        {{ $readingLog->read_date->format('n-j-Y') }}
    </div>
    <div>
        {{ $readingLog->book_title }}
    </div>
    <div>
        {{ $readingLog->book_subtitle }}
    </div>
@endsection
