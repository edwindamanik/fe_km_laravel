<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
    integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
    crossorigin="anonymous"
    referrerpolicy="no-referrer"
  />
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
    integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
    crossorigin="anonymous"
    referrerpolicy="no-referrer"
  />
  <link rel="stylesheet" href="{{ URL::asset('assets/css/styles.css') }}">
  <title>Homepage</title>
</head>
<body>
  
  {{-- LAYOUT HOMEPAGE --}}
  <header class="container">
    @include('components.navbar')
    @include('components.breaking-news')
  </header>

  <div class="container mt-4">
    <div class="row gx-5">
      <div class="col-8">

        {{-- BERITA UTAMA --}}
        @include('components.main-news')

        {{-- BERITA UTAMA LAINNYA --}}
        <div class="mt-3">
          <h4 class="special-font-prompt text-uppercase fst-italic fw-bold" style="font-size: 16px; margin-left: 20px">Berita Utama Lainnya</h4>
          @include('components.slider-news')
        </div>

        {{-- BERITA SPOTLIGHT --}}
        <div class="mt-3" style="border-bottom: 1px solid #E5E5E5">
          <h4 class="special-font-prompt text-uppercase fst-italic fw-bold" style="font-size: 16px; margin-left: 20px">spotlight</h4>
          @include('components.slider-news')
        </div>

        {{-- LIST MAIN NEWS --}}
        <div style="border-bottom: 1px solid #E5E5E5">
          @include('components.list-main-news')
        </div>

        {{-- GALLERY BERITA --}}
        <div class="mt-3" style="border-bottom: 1px solid #E5E5E5">
          @include('components.gallery-news')
        </div>

        {{-- PROMOTION PRODUCT --}}
        <div class="mt-3" style="border-bottom: 1px solid #E5E5E5">
          @include('components.promotion-product')
        </div>

        {{-- VIDEO NEWS --}}
        <div class="mt-3" style="border-bottom: 1px solid #E5E5E5">
          @include('components.video-news')
        </div>

        {{-- LIST MAIN NEWS REPEAT --}}
        <div class="mt-3" style="border-bottom: 1px solid #E5E5E5">
          @include('components.list-main-news')
        </div>

      </div>
      <div class="col-4">
        
        {{-- TRENDING TAG --}}
        <div>
          @include('components.trending-tag')
        </div>

        {{-- LIVE STREAMING --}}
        <div class="mt-3">
          @include('components.live-streaming')
        </div>

        {{-- BERITA SIDEBAR --}}
        <div class="mt-3">
          @include('components.sidebar-news')
        </div>

        {{-- BERITA POPULER --}}
        <div class="mt-3">
          @include('components.populer-news')
        </div>

      </div>
    </div>
  </div>

  {{-- FOOTER --}}
  <footer class="mt-5">
    @include('components.footer')
  </footer>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
<script
  src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"
  integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA=="
  crossorigin="anonymous"
  referrerpolicy="no-referrer"
></script>
<script
  src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
  integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
  crossorigin="anonymous"
  referrerpolicy="no-referrer"
></script>
<script src="{{ URL::asset('assets/js/script.js') }}"></script>
</html>