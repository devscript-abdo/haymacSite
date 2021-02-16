@extends('layouts.app')

@section('contentSlider')

   @include('dark.pages.home.section_a_slider')

@endsection

@section('content')

   @include('dark.pages.home.section_b_about2')
   @include('dark.pages.home.section_c_services')
   @include('dark.pages.home.section_d_numbers')
   @include('dark.pages.home.section_e_works')
   @include('dark.pages.home.section_f_block')
   @include('dark.pages.home.section_g_skills')
   @include('dark.pages.home.section_h_clients')
   @include('dark.pages.home.section_i_blog')
   @include('dark.pages.home.section_j_action')

@endsection()