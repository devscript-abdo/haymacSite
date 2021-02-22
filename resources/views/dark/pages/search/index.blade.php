@extends('layouts.app')

@section('content')

   @include('dark.pages.search.section_a_top')
   
   @include('dark.pages.search.section_b_searcher')

@endsection()

@section('livewireSectionStyle')

  @livewireStyles

@endsection()

@section('livewireSectionScript')

  @livewireScripts
  
@endsection()