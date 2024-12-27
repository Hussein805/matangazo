@extends('layouts.app')

@section('content')

    <!-- Google AdSense Ad -->
    <div class="adsense">
        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <ins class="adsbygoogle"
             style="display:block"
             data-ad-client="ca-pub-1234567890123456"
             data-ad-slot="9876543210"
             data-ad-format="auto"
             data-full-width-responsive="true"></ins>
        <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
        </script>
    </div>
</div>
   

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-15">
            <div class="card">
                <div class="card-header bg-primary text-white">{{ __('Advertisements') }}</div>
        
        <div class="row mt-4">
            @foreach ($ads as $ad)
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{ asset('storage/' . $ad->image) }}" class="card-img-top" alt="{{ $ad->title }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $ad->title }}</h5>
                            <p class="card-text">{{ $ad->description }}</p>
                            <p class="image"> <a href="{{ route('vehicles.show', $ad->id) }}" class="btn btn-primary">Show</a></p>
                        </div>
                    </div>
                </div>
            @endforeach
            </div>
    </div>
 </div>
 </div>
@endsection