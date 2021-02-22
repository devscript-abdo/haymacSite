@extends('layouts.app')

@section('content')

   @include('dark.pages.blog.single.section_a_top')
   
   @include('dark.pages.blog.single.section_b_blog')

@endsection()

@section('livewireSectionStyle')

  @livewireStyles

@endsection()

@section('livewireSectionScript')

  @livewireScripts
  
@endsection()