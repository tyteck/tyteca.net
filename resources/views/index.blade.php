@extends('layout.app') @section('pageTitle', 'Once upon a dev')
@section('content')

<section id="main">
    @include ('layout.navbar')

    <!-- Page Content-->
    <div class="container-fluid p-0">
        @include ("partials.apropos")

        <hr class="m-0" />
        @include ("partials.experience")

        <hr class="m-0" />
        @include ("partials.education")

        <hr class="m-0" />
        @include ("partials.skills")

        <hr class="m-0" />
        @include ("partials.hobbies")
    </div>

</section>
@endsection