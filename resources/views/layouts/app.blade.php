@inject('helper', 'App\Http\Helper')

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<link href="https://vjs.zencdn.net/8.10.0/video-js.css" rel="stylesheet" />
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
@include('_partials.header_styles')

<body>
   <div id="app" class="app">
      <nav class="navbar   mt-5 px-5 navbar-fixed-top navbar-expand-lg  navbar-transparent navbar-absolute" color-on-scroll="100" id="sectionsNav">
         @include('_partials.header', ['show_logo' => true, 'show_book' => true])
      </nav>
      <div id="content" class="main  index-page">
         @yield('content')
      </div>
      @include('_partials.footer')
      </footer>
   </div>








   <script src="/js/services_js.js?version={{ str_random(6) }}"></script>




   @yield('page-scripts')
   <script type="text/javascript">
      @yield('inline-scripts')
      jQuery(function() {

      });
   </script>

</body>

</html>