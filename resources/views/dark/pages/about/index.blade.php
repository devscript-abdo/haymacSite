@extends('layouts.app')

@section('content')


   @include('dark.pages.about.section_a_top')
   @include('dark.pages.about.section_b_intro')
   @include('dark.pages.about.section_c_services')
   @include('dark.pages.about.section_g_area')
   {{--@include('dark.pages.about.section_d_block')--}}
   @include('dark.pages.about.section_d_testimonials')

   {{--@include('dark.pages.about.section_e_skills')--}}
   @include('dark.pages.about.section_f_teams')
   
   @include('dark.pages.about.section_i_clients')
   @include('dark.pages.about.section_j_action')

   
@endsection()