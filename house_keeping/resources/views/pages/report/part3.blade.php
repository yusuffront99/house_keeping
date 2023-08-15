<div class="container">
  <div class="box-header-3">
    <img src="{{public_path('images/header.jpeg')}}" width="60%" alt="" srcset="">
    <img src="{{public_path('images/logo.jpeg')}}" width="20%" alt="" style="margin-left: 100px;" srcset="">
  </div>
  
  <div class="box-content">
    <!-- CONTENT -->
    <div class="content-3">
      1. Executive Summary
      <div style="font-size:15px; margin:-10px 0px 3px 18px; font-weight:normal; text-align:justify;">
        {!!$lap_hk[0]->summary!!}
      </div>
      <br>
      <div class="fw-bold" style="margin:-10px 0px 3px 18px">Resume House Keeping</div>
      <div id="canvas">
        <img src="{{public_path('storage/'.$lap_hk[0]->graphic)}}" alt=""  width="100%">
      </div>

      <br>
      <table class="table-bordered text-center">
        <tr>
            <th colspan="5" id="title-table">HOUSE KEEPING MINGGU I</th>
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

          @foreach ($weekly1 as $wk1)
          <tr style="font-weight: normal;">
            <td>{{$wk1->tgl_boiler}}</td>
            <td>{{$wk1->peralatan_boiler}}</td>
            <td></td>
            <td>{{$wk1->tgl_turbine}}</td>
            <td>{{$wk1->peralatan_turbine}}</td>
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