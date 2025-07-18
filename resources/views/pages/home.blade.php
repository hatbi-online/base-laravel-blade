@extends('layouts.main')

@section('content')
    <div>
        <div class="flex min-h-screen flex-col items-center justify-center">
            <div class="mb-12 flex items-center justify-center gap-12">
                <img alt="laravel" class="duration-400 h-16 w-16 transition-all ease-in-out hover:rotate-180" src="{{ asset('images/logo/laravel.png') }}">
                <img alt="vite" class="duration-400 h-16 w-16 transition-all ease-in-out hover:rotate-180" src="{{ asset('images/logo/vite.png') }}">
                <img alt="blade" class="duration-400 h-16 w-16 transition-all ease-in-out hover:rotate-180" src="{{ asset('images/logo/blade.svg') }}">
            </div>

            <a href="https://github.com/orgs/hatbi-online/repositories" target="_blank" class="mb-4 rounded-full bg-orange-500 px-5 py-2.5 text-center text-sm font-medium text-white hover:cursor-pointer hover:bg-orange-600 focus:outline-none focus:ring-4 focus:ring-orange-300" type="button">Nhấn vào đây</a>
        </div>

    </div>
@endsection

@section('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            console.log('hello!');

        });
    </script>
@endsection
