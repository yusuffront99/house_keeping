<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="{{public_path('assets/css/style_common.css')}}">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body>
  @include('pages.report.part1')
  @include('pages.report.part2')
  @include('pages.report.part3')
  @include('pages.report.part4')
  @include('pages.report.part5')
  
  <!-- WEEKLY 1 -->
  @include('pages.report.weekly_report1.boilers.p1')
  @include('pages.report.weekly_report1.boilers.p2')
  @include('pages.report.weekly_report1.boilers.p3')
  
  @include('pages.report.weekly_report1.turbine.p1')
  @include('pages.report.weekly_report1.turbine.p2')
  @include('pages.report.weekly_report1.turbine.p3')
   <!-- WEEKLY 1 -->
   
  <!-- WEEKLY 2 -->
  @include('pages.report.weekly_report2.boilers.p1')
  @include('pages.report.weekly_report2.boilers.p2')
  @include('pages.report.weekly_report2.boilers.p3')

  @include('pages.report.weekly_report2.turbine.p1')
  @include('pages.report.weekly_report2.turbine.p2')
  @include('pages.report.weekly_report2.turbine.p3')
   <!-- WEEKLY 2 -->

  <!-- WEEKLY 3 -->
  @include('pages.report.weekly_report3.boilers.p1')
  @include('pages.report.weekly_report3.boilers.p2')
  @include('pages.report.weekly_report3.boilers.p3')

  @include('pages.report.weekly_report3.turbine.p1')
  @include('pages.report.weekly_report3.turbine.p2')
  @include('pages.report.weekly_report3.turbine.p3')
   <!-- WEEKLY 3 -->

  <!-- WEEKLY 4 -->
  @include('pages.report.weekly_report4.boilers.p1')
  @include('pages.report.weekly_report4.boilers.p2')
  @include('pages.report.weekly_report4.boilers.p3')

  @include('pages.report.weekly_report4.turbine.p1')
  @include('pages.report.weekly_report4.turbine.p2')
  @include('pages.report.weekly_report4.turbine.p3')
   <!-- WEEKLY 4 -->
  

  
</body>
</html>