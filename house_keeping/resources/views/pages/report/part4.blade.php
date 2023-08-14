<div class="container">
  <div class="box-header-4">
    <img src="{{public_path('images/header.jpeg')}}" width="60%" alt="" srcset="">
    <img src="{{public_path('images/logo.jpeg')}}" width="20%" alt="" style="margin-left: 100px;" srcset="">
  </div>
  
  <div class="box-content">
    <!-- CONTENT -->
    <div class="content-3">
      <table class="table-bordered text-center">
        <tr>
            <th colspan="5" id="title-table">HOUSE KEEPING MINGGU II</th>
          </tr>
          <tr>
            <td id="boiler" colspan="2">Boiler</td>
            <td></td>
            <td id="turbine" colspan="2">Turbine</td>
          </tr>

          <tr>
            <td>Tanggal</td>
            <td>Peralatan</td>
            <td></td>
            <td>Tanggal</td>
            <td>Peralatan</td>
          </tr>

          @foreach ($weekly2 as $wk2)
          <tr style="font-weight: normal;">
            <td>{{$wk2->tgl_boiler}}</td>
            <td>{{$wk2->peralatan_boiler}}</td>
            <td></td>
            <td>{{$wk2->tgl_turbine}}</td>
            <td>{{$wk2->peralatan_turbine}}</td>
          </tr>
          @endforeach
      </table>
      <br>
      <table class="table-bordered text-center">
        <tr>
            <th colspan="5" id="title-table">HOUSE KEEPING MINGGU III</th>
          </tr>
          <tr>
            <td id="boiler" colspan="2">Boiler</td>
            <td></td>
            <td id="turbine" colspan="2">Turbine</td>
          </tr>

          <tr>
            <td>Tanggal</td>
            <td>Peralatan</td>
            <td></td>
            <td>Tanggal</td>
            <td>Peralatan</td>
          </tr>

          @foreach ($weekly3 as $wk3)
          <tr style="font-weight: normal;">
            <td>{{$wk3->tgl_boiler}}</td>
            <td>{{$wk3->peralatan_boiler}}</td>
            <td></td>
            <td>{{$wk3->tgl_turbine}}</td>
            <td>{{$wk3->peralatan_turbine}}</td>
          </tr>
          @endforeach
      </table>
      <br>
      <table class="table-bordered text-center">
        <tr>
            <th colspan="5" id="title-table">HOUSE KEEPING MINGGU IV</th>
          </tr>
          <tr>
            <td id="boiler" colspan="2">Boiler</td>
            <td></td>
            <td id="turbine" colspan="2">Turbine</td>
          </tr>

          <tr>
            <td>Tanggal</td>
            <td>Peralatan</td>
            <td></td>
            <td>Tanggal</td>
            <td>Peralatan</td>
          </tr>

          @foreach ($weekly4 as $wk4)
          <tr style="font-weight: normal;">
            <td>{{$wk4->tgl_boiler}}</td>
            <td>{{$wk4->peralatan_boiler}}</td>
            <td></td>
            <td>{{$wk4->tgl_turbine}}</td>
            <td>{{$wk4->peralatan_turbine}}</td>
          </tr>
          @endforeach
      </table>
    </div>
    <!-- CONTENT -->
  </div>
  
  <div class="box-bottom">
    <img src="{{public_path('images/footer.jpeg')}}" width="100%" alt="" srcset="">
  </div>
</div>