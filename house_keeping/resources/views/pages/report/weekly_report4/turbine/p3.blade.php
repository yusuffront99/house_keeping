<div class="container">
  <div class="box-header-4">
    <img src="{{public_path('images/header.jpeg')}}" width="60%" alt="" srcset="">
    <img src="{{public_path('images/logo.jpeg')}}" width="20%" alt="" style="margin-left: 100px;" srcset="">
  </div>
  
  <div class="box-content-p1">
    <!-- CONTENT -->
      @foreach ($img_weekly4_p3 as $rp)
      <table class="table table-bordered text-center" style="background: #d3d2d2; font-size:14px; font-weight:normal;">
        <tr>
          <th>Shift</th>
          <th>Equipment</th>
          <th>Location</th>
          <th>Schedule</th>
        </tr>
        <tr>
          <td>G</td>
          <td>{{$rp->peralatan_turbine}}</td>
          <td>{{$rp->posisi_turbine}}</td>
          <td>{{$rp->tgl_turbine}}</td>
        </tr>
      </table>

      <table class="table table-bordered text-center" style="margin-top: -15px;">
      <tr>
          <td id="before">Sebelum</td>
          <td id="process">Proses</td>
          <td id="after">Sesudah</td>
        </tr>
        @if ($rp->foto_4 == 'img_default/white.jpeg')
        <tr>
          <td></td>
          <td></td>
          <td></td>
        </tr>

        @else
        <tr>
          <td><img src="{{public_path('storage/' . $rp->foto_4)}}" alt="" width="190px" height="200"></td>
          <td><img src="{{public_path('storage/' . $rp->foto_5)}}" alt="" width="190px" height="200"></td>
          <td><img src="{{public_path('storage/' . $rp->foto_6)}}" alt="" width="190px" height="200"></td>
        </tr>
        @endif
      </table>

      @endforeach    
    <!-- CONTENT -->
  </div>
  
  <div class="box-bottom-p1">
    <img src="{{public_path('images/footer.jpeg')}}" width="100%" alt="" srcset="">
  </div>
</div>