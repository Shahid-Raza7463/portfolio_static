@extends('web.pages.template')

@section('content')
    {{-- <div class="container mt-4">
        <div class="mx-3">
            <div class="row">
                @include('web.pages.blogs.blogs_list')
            </div>
        </div>
    </div> --}}
    @include('web.pages.common.leftheader')
    @include('web.pages.portfolio.project7.portfoliocontent')
    @include('web.pages.common.footer')
@endsection
