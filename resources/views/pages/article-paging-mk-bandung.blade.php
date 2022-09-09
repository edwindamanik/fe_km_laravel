<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <link rel="stylesheet" href="{{ URL::asset('assets/css/styles.css') }}">
  <title>Article Paging</title>
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
        @include('components.main-content-news')
        @include('components.read-too')
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
</html>