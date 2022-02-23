<!-- ***** Main Banner Area Start ***** -->
@extends('frontend.master_home')    
@section('main_content')

@include('frontend.body.main_banner')
    <!-- ***** Main Banner Area End ***** -->

    <!-- ***** Features Item Start ***** -->
  @include('frontend.body.program')
    <!-- ***** Features Item End ***** -->

    <!-- ***** Call to Action Start ***** -->
   @include('frontend.body.call_to_action')
    <!-- ***** Call to Action End ***** -->

    <!-- ***** Our Classes Start ***** -->
    @include('frontend.body.classess')
    <!-- ***** Our Classes End ***** -->

    @include('frontend.body.schedule')

    <!-- ***** Testimonials Starts ***** -->
    @include('frontend.body.testimonial')
    <!-- ***** Testimonials Ends ***** -->

    <!-- ***** Contact Us Area Starts ***** -->
   @include('frontend.body.contact')
    <!-- ***** Contact Us Area Ends ***** -->

    @endsection