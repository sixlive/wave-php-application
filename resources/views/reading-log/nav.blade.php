<div class="max-w-xl m-auto bg-white p-4 mb-2">
        @foreach($links as $title => $url)
            <a class="text-black hover:no-underline" href="{{ $url }}">{{ $title }}</a>
        @endforeach
</div>
