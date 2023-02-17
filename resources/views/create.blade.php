@extends('layout.master')
@section('title', 'Create')
@section('content')
<div class="pb-20">
    <div>
        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
    </div>

    <div class="mt-20 text-center">
        <h1 class="py-10 text-4xl">Create Message</h1>

        <form action="{{ route('form.store') }}" method="POST">
            @csrf
            <div>
                <div class="my-4">
                    <label for="name"><i class="fa-solid fa-user"></i> Name</label>
                </div>
                <div>
                    <input type="text" name="name" class="@error('name') is-invalid outline-none @enderror" value="{{ old('name') }}" autofocus>
                </div>
                <div>
                    @if ($errors->first('name'))
                        <div class="error"><p>{{ $errors->first('name') }}</p></div>
                    @endif
                </div>
            </div>

            <div>
                <div class="my-4">
                    <label for="email"><i class="fa-solid fa-envelope"></i> Email</label>
                </div>
                <div>
                    <input type="text" name="email" class="@error('email') is-invalid outline-none @enderror" value="{{ old('email') }}">
                </div>
                <div>
                    @if ($errors->first('email'))
                        <div class="error"><p>{{ $errors->first('email') }}</p></div>
                    @endif
                </div>
            </div>

            <div>
                <div class="my-4">
                    <label for="subject"><i class="fa-sharp fa-solid fa-reply-all"></i> Subject</label>
                </div>
                <div>
                    <input type="text" name="subject" class="@error('subject') is-invalid outline-none @enderror" value="{{ old('subject') }}">
                </div>
                <div>
                    @if ($errors->first('subject'))
                        <div class="error"><p>{{ $errors->first('subject') }}</p></div>
                    @endif
                </div>
            </div>

            <div>
                <div class="my-4">
                    <label for="message"><i class="fa-solid fa-message"></i> Message</label>
                </div>
                <div>
                    <textarea name="message" class="@error('message') is-invalid outline-none @enderror">{{ old('message') }}</textarea>
                </div>
                <div>
                    @if ($errors->first('message'))
                        <div class="error"><p>{{ $errors->first('message') }}</p></div>
                    @endif
                </div>
            </div>

            <div>
                <button type="submit">Send</button>
            </div>
            <div class="pt-10">
                <a class="buttons" href="{{ route('form.index') }}">Go Back</a>
            </div>
        </form>
    </div>
</div>
@endsection