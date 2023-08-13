<div class="page-1">
      <!-- HEADER LOGO -->
    <span id="header-logo-left">
      <img src="{{public_path('images/header.jpeg')}}" alt="" width="60%">
    </span>
    <span id="header-logo-right">
      <img src="{{public_path('images/logo.jpeg')}}" alt="" width="20%">
    </span>
    <!-- CONTENT -->
    <div class="content-page3">
     1. Executive Summary
      <p>
        Pada semester I tahun 2023 rencana pelaksanaan house keeping sebanyak 18 peratalan
        setiap bulannya berdasarkan nota dinas nomor 1599/KIT/.02.01/MAN II OP/2022 perihal
        Jadwal House Keeping / 5S Semester 1 Tahun 2023. Dimana setiap peralatan berbeda –
        beda frekuensi house keepingnya (Weekly, 2 Week, Monthly). Bulan Juni 2023 Operator 
        Shift G telah melaksanakan house keeping sebanyak 30 peralatan dari 31 peralatan yang
        terjadwal.
        <br><br>
        <div class="fw-bold" style="margin-left: 13px; margin-bottom:10px;">Resume House Keeping</div>
      </p>
      <div id="canvas" style="margin-left: 13px;">
        <img src="{{public_path('images/grafik.jpeg')}}" alt=""  width="100%">
      </div>

      <br><br>

      <div style="margin-left: 13px;">
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

    <!-- FOOTER LOGO -->
    <span id="footer-logo-page3">
      <img src="{{public_path('images/footer.jpeg')}}" alt="">
    </span>
    </div>
