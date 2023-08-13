<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="{{public_path('assets/css/page1.css')}}">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body>
    @include('pages.report.page1')  
    @include('pages.report.page2')  
    @include('pages.report.page3')  
    @include('pages.report.page4')  
    @include('pages.report.page5')  

  </body>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  @stack('add-script')
</html>