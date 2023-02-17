@extends('layout.master')
@section('title', 'Message')
@section('content')
<div class="pb-20">
    <div>
        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
    </div>

    <div class="mt-20 text-center">
        <h1 class="py-10 text-4xl">Your Message</h1>
    </div>

    <div class="mt-20">
        <div class="shadow-lg shadow-indigo-900 p-4 border rounded-lg">
            <p class="text-4xl font-bold mb-2">{{ $message->name }}</p>
            <p class="text-[11px]">{{ $message->updated_at }}</p>
            <p class="my-4 text-xl">{{ $message->email }}</p>
            <p class="text-xl">{{ $message->subject }}</p>
            <p class="my-2 p-4 text-xl border border-gray-800 rounded-lg">{{ $message->message }}</p>
        </div>
    </div>

    <div class="mt-20 text-center">
        <a class="buttons" href="{{ route('form.index') }}">Go Back</a>
    </div>

{{-- 
    <div class="mt-20">
        @if ($messages->count() == 0)
            <h1 class="text-center text-4xl">No Messages Found!</h1>
        @else
            <div class="flex flex-col gap-16">
                @foreach ($messages as $message)
                    <div class="shadow-lg shadow-indigo-900 p-4 border rounded-lg">
                        <a class="text-4xl font-bold mb-2" href="">{{ $message->name }}</a>
                        <p class="text-[11px]">{{ $message->updated_at }}</p>
                        <p class="my-4 text-xl">{{ $message->email }}</p>
                        <p class="text-xl">{{ $message->subject }}</p>
                        <p class="my-2 p-4 text-xl border border-gray-800 rounded-lg">{{ $message->message }}</p>
                        <div class="flex justify-center gap-4">
                            <a class="text-xl text-cyan-500" href="{{ route('form.edit', $message->id) }}">Edit</a>
                            <a onclick="return confirm('Want to delete?')" class="text-xl text-red-500" href="{{ route('form.destroy', $message->id) }}">Delete</a>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div> --}}
</div>
@endsection