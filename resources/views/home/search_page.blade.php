@extends('layouts.home')

@section('title', 'Hakkımızda')
@section('content')

    <section>
        <div class="container">
            <div class="text-center">
                <h1>İLAN ARA</h1>
                <div class="search">
                    <form action="{{route('getcar')}}" method="post" class="input-append">
                        @csrf
                        @livewire('search')
                        <button class="btn btn-dark" type="submit">Search</button>
                    </form>
                    @section('footerjs')
                        @livewireScripts
                    @endsection
                </div>
            </div>
        </div>
    </section>
@endsection
