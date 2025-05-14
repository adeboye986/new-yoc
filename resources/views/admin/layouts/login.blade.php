<!DOCTYPE html>
<html lang="en">


<!-- index.html  21 Nov 2019 03:44:50 GMT -->
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>YOC - Admin Dashboard Template</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="{{ asset('blogasset/blog-asset/css/app.min.css') }}">
  <link rel="stylesheet" href="{{ asset('blogasset/blog-asset/bundles/summernote/summernote-bs4.css') }}">
  <link rel="stylesheet" href="{{ asset('blogasset/blog-asset/bundles/jquery-selectric/selectric.css') }}">
  <link rel="stylesheet" href="{{ asset('blogasset/blog-asset/bundles/bootstrap-tagsinput/dist/bootstrap-tagsinput.css') }}">
  <!-- Template CSS -->
  <link rel="stylesheet" href="{{ asset('blogasset/blog-asset/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('blogasset/blog-asset/css/components.css') }}">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="{{ asset('blogasset/blog-asset/css/custom.css') }}">
  <link rel='shortcut icon' type='image/x-icon' href='{{ asset('blogasset/blog-asset/img/favicon.ico') }}' />
</head>

        <main>
            @yield('content')
        </main>

         <!-- General JS Scripts -->
  <script src="{{ asset('blogasset/blog-asset/js/app.min.js') }}"></script>
  <!-- JS Libraies -->
  <script src="{{ asset ('blogasset/blog-asset/bundles/apexcharts/apexcharts.min.js') }}"></script>
  <script src="{{ asset ('blogasset/blog-asset/bundles/summernote/summernote-bs4.js') }}"></script>
  <script src="{{ asset ('blogasset/blog-asset/bundles/jquery-selectric/jquery.selectric.min.js') }}"></script>
  <script src="{{ asset ('blogasset/blog-asset/bundles/upload-preview/assets/js/jquery.uploadPreview.min.js') }}"></script>
  <script src="{{ asset ('blogasset/blog-asset/bundles/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js') }}"></script>
  <!-- Page Specific JS File -->
  <script src="{{ asset ('blogasset/blog-asset/js/page/index.js') }}"></script>
  <script src="{{ asset ('blogasset/blog-asset/js/page/create-post.js') }}"></script>
  <script src="{{ asset ('blogasset/blog-asset/js/page/posts.js') }}"></script>
  <!-- Template JS File -->
  <script src="{{ asset ('blogasset/blog-asset/js/scripts.js') }}"></script>
  <!-- Custom JS File -->
  <script src="{{ asset ('blogasset/blog-asset/js/custom.js') }}"></script>
  @stack('scripts')
</body>


<!-- index.html  21 Nov 2019 03:47:04 GMT -->
</html>