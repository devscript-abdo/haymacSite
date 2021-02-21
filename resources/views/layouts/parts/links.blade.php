    <!-- Favicon -->
<link rel="shortcut icon" href="img/favicon.ico" />
<link rel="canonical" href="{{request()->url()}}" />
{{--<link rel="alternate"  href="{{request()->fullUrl()}}" hreflang="fr" />--}}

<link rel="alternate" type="application/atom+xml" title="Posts" href="/feed">

@include('feed::links')