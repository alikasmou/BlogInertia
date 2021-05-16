@extends('frontend.layout.master')

{{-- Page Meta Data --}}
@section('page-title','Page Title')
@section('theme-color','#ffffff')
@section('canonical','canonical')
@section('keywords','keywords')
@section('description','description')
@section('subject','subject')
@section('copyright','keywords')
@section('Publisher','keywords')
@section('language','language')
@section('robots ','robots')
@section('revised','revised')
@section('abstract','abstract')
@section('topic','topic')
@section('summary','summary')
@section('Classification','Classification')
@section('author','author')
@section('designer','designer')
@section('reply-to','reply-to')
@section('owner','owner')
@section('url','url')
@section('identifier-URL','identifier-URL')
@section('directory','directory')
@section('category','category')
@section('coverage','coverage')
@section('distribution','distribution')
@section('rating','rating')
@section('revisit-after','revisit-after')
@section('Expires','Expires')
@section('Pragma','Pragma')
@section('Cache-Control','Cache-Control')
{{-- /Page Meta Data --}}

{{-- Open Graph Meta Data --}}
@section('og-title','test')
@section('og-type','test')
@section('og-url','test')
@section('og-description','test')
@section('og-determiner','test')
@section('og-locale','test')
@section('og-locale-alternate','test')
@section('og-locale-alternate','test')
@section('og-site_name','test')

{{-- Image  --}}
@section('og-image','test')
@section('og-image-secure_url','test')
@section('og-image-type','test')
@section('og-image-width','test')
@section('og-image-height','test')
@section('og-image-alt','test')

{{-- video  --}}
@section('og-video','test')
@section('og-video-secure_url','test')
@section('og-video-type','test')
@section('og-video-width','test')
@section('og-video-height','test')

{{-- audio  --}}
@section('og-audio','test')
@section('og-audio-secure_url','test')
@section('og-audio-type','test')
{{-- /Open Graph Meta Data --}}
{{-- /Page Meta Data --}}

{{-- Page Settings --}}
{{-- Head Scripts --}}
@section('head-scripts')
    header scripts
@endsection
{{-- /Head Scripts --}}

{{-- Footer Scripts --}}
@section('footer-scripts')
    footer scripts
@endsection
{{-- Footer Scripts --}}
{{-- /Page Settings --}}

@section('header')
    <h1>header</h1>
@endsection

@section('main')
<div class="max-w-md mx-auto bg-white rounded-xl shadow-md overflow-hidden md:max-w-2xl">
    <div class="md:flex">
      <div class="md:flex-shrink-0">
        <img class="h-48 w-full object-cover md:h-full md:w-48" src="{{asset('css/img/test.jpeg')}}" alt="Man looking at item at a store">
      </div>
      <div class="p-8">
        <div class="uppercase tracking-wide text-sm text-indigo-500 font-semibold">Case study</div>
        <a href="#" class="block mt-1 text-lg leading-tight font-medium text-black hover:underline">Finding customers for your new business</a>
        <p class="mt-2 text-gray-500">Getting a new business off the ground is a lot of hard work. Here are five ideas you can use to find your first customers.</p>
      </div>
    </div>
  </div>
@endsection

@section('aside')
    <h1>aside</h1>
@endsection

@section('footer')
    <h1>footer</h1>
@endsection