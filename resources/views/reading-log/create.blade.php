@extends('layouts.app')

@section('content')
        @if ($errors->any())
        <div class="bg-red-lightest mb-3 p-4 text-red rounded">
            <h2 class="mb-1">Whoops!</h2>
            <ul class="list-reset px-4">
                @foreach ($errors->all() as $error)
                    <li>→ {{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ $action }}" method="POST">
       {{ method_field($method) }}
       {{ csrf_field() }}

        <div class="mb-2">
                <label for="read_date">Reading date <small>(required)</small></label>
                <datepicker
                    input-class="block w-full p-2 my-1 bg-grey-lighter"
                    name="read_date"
                    format="M-d-yyyy"
                    value="{{ old('read_date', $readingLog->read_date->format('m-d-Y')) }}"
                ></datepicker>
        </div>
        <div class="mb-2">
            <label>
                Book Title <small>(required)</small>
                <input type="text" name="book_title" value="{{ old('book_title', $readingLog->book_title) }}" class="block w-full p-2 my-2 bg-grey-lighter">
            </label>
        </div>
        <div class="mb-2">
            <label>
                Subtitle
                <input type="text" name="book_subtitle" value="{{ old('book_subtitle', $readingLog->book_subtitle) }}" class="block w-full p-2 my-2 bg-grey-lighter">
            </label>
        </div>
        <div class="mb-2">
            <label>
                Book Author
                <input type="text" name="book_author" value="{{ old('book_author', $readingLog->book_author) }}" class="block w-full p-2 my-2 bg-grey-lighter">
            </label>
        </div>
        <div class="flex justify-between items-center">
            <div>
                <a href="{{ route('reading-logs.index')}}" class="text-black no-underline hover:underline">Cancel</a>
                <button type="submit" class="p-2 m-2 bg-grey-lighter rounded">Save Book</button>
            </div>
            @if($method !== 'POST')
            <div>
                <a href="#" class="text-red" onclick="event.preventDefault();if (window.confirm('Delete entry?')) { document.getElementById('delete-form').submit() }">Delete</a>
            </div>
            @endif
        </div>
    </form>
    <form id="delete-form" class="hidden" action="{{ route('reading-logs.destroy', $readingLog) }}" method="POST">
        {{ csrf_field() }}
        {{ method_field('DELETE') }}
    </form>
@endsection
