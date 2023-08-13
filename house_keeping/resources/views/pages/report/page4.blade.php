<div class="page-1">
      <!-- HEADER LOGO -->
    <span id="header-logo-left">
      <img src="{{public_path('images/header.jpeg')}}" alt="" width="60%">
    </span>
    <span id="header-logo-right">
      <img src="{{public_path('images/logo.jpeg')}}" alt="" width="20%">
    </span>
    
    <div class="content-table">
      <!-- CONTENT -->
    <div class="content-page3">
      <div style="margin-left: 13px;">
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

          @foreach ($reports as $rp)
          <tr style="font-weight: normal;">
            <td>{{$rp->tgl_boiler}}</td>
            <td>{{$rp->peralatan_boiler}}</td>
            <td></td>
            <td>{{$rp->tgl_turbine}}</td>
            <td>{{$rp->peralatan_turbine}}</td>
          </tr>
          @endforeach
        </table>
      </div>
    </div>
    <!-- CONTENT -->
    <br>
    <!-- CONTENT -->
    <div class="content-page3">
      <div style="margin-left: 13px;">
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

          @foreach ($reports as $rp)
          <tr style="font-weight: normal;">
            <td>{{$rp->tgl_boiler}}</td>
            <td>{{$rp->peralatan_boiler}}</td>
            <td></td>
            <td>{{$rp->tgl_turbine}}</td>
            <td>{{$rp->peralatan_turbine}}</td>
          </tr>
          @endforeach
        </table>
      </div>
    </div>
    <!-- CONTENT -->
    <br>
    <!-- CONTENT -->
    <div class="content-page3">
      <div style="margin-left: 13px;">
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

          @foreach ($reports as $rp)
          <tr style="font-weight: normal;">
            <td>{{$rp->tgl_boiler}}</td>
            <td>{{$rp->peralatan_boiler}}</td>
            <td></td>
            <td>{{$rp->tgl_turbine}}</td>
            <td>{{$rp->peralatan_turbine}}</td>
          </tr>
          @endforeach
        </table>
      </div>
    </div>
    <!-- CONTENT -->
    </div>

    <!-- FOOTER LOGO -->
    <span id="footer-logo-page3">
      <img src="{{public_path('images/footer.jpeg')}}" alt="">
    </span>
    </div>
