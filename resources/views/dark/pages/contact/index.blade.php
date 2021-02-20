@extends('layouts.app')

@section('contentSlider')

  @include('dark.pages.contact.section_a_top') 

@endsection

@section('content')


   @include('dark.pages.contact.section_b_contact')

   @include('dark.pages.contact.section_c_map')
 
@endsection()

@push('eventer')

 
@endpush

@push('styles')

  <style>

    .cryptedmail:after{content:attr(data-name) "@" attr(data-domain) "." attr(data-tld)}
    
  </style>

@endpush
