@extends('layouts.front_layout')

@section('content')


    @include('layouts.partials.front.bannerslider')


    <main id="listar-main" class="listar-main listar-haslayout">
        @include('layouts.partials.front.categories')

    @include('layouts.partials.front.home-ads')




    @include('layouts.partials.front.parallex1')
        <br> <br>

    @include('layouts.partials.front.places')





    @include('layouts.partials.front.posts')



    </main>
@endsection
