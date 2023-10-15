<div class="container">
  <div class="box-header-2">
    <img src="{{public_path('images/header.jpeg')}}" width="60%" alt="" srcset="">
    <img src="{{public_path('images/logo.jpeg')}}" width="20%" alt="" style="margin-left: 100px;" srcset="">
  </div>
  
  <div class="box-content">
    <!-- CONTENT -->
    <div class="content">
        <div class="title-header-2">
            LAPORAN HOUSE KEEPING <br> OPERATOR SHIFT G
            <br><br><br>
            LEMBAR PENGESAHAN
            <div class="text-month" style="font-weight: normal; margin-top:10px; font-size:18px;">
            {{Carbon\carbon::createFromFormat('Y-m-d', $lap_hk[0]->tgl_pengesahan)->isoFormat('D MMMM Y')}}
            </div>
        </div>
        <br>
        <table class="text-center" style="margin-left: 10%; border:1px solid white !important">
          <tr>
            <th colspan="2" style="font-size: 12px;">Prepared by</th>
          </tr>
          <tr>
            <th class="title-name">{{$lap_hk[0]->op_turbine1}}</th>
            <th class="title-name">{{$lap_hk[0]->op_turbine2}}</th>
          </tr>
          <tr>
            <td class="space-ttd"><img src="{{public_path('storage/'. $lap_hk[0]->ttd_opt1)}}" width="70px" height="" alt=""></td>
            <td class="space-ttd"><img src="{{public_path('storage/'. $lap_hk[0]->ttd_opt2)}}" width="70px" alt=""></td>
          </tr>
          <tr>
            <td>JO Operator Turbine</td>
            <td>JO Operator Turbine</td>
          </tr>
<br>
          <tr>
            <th class="title-name" colspan="2">{{$lap_hk[0]->op_boiler1}}</th>
          </tr>
          <tr class="text-center">
            <td class="space-ttd" colspan="2"><img src="{{public_path('storage/'. $lap_hk[0]->ttd_opb1)}}" width="70px" alt=""></td>
          </tr>
          <tr>
            <td colspan="2">JO Operator Boiler</td>
          </tr>
          <br><br>
          <tr>
            <th style="font-size: 12px;">Approved by</th>
            <th style="font-size: 12px;">Aknowledged by</th>
          </tr>
          <tr>
            <th class="title-name">{{$lap_hk[0]->team_leader}}</th>
            <th class="title-name">{{$lap_hk[0]->manbagop}}</th>
          </tr>
          <tr>
            <td class="space-ttd"><img src="{{public_path('storage/'. $lap_hk[0]->ttd_tl)}}" width="70px" alt=""></td>
            <td class="space-ttd"><img src="{{public_path('storage/'. $lap_hk[0]->ttd_manbag)}}" width="70px" alt=""></td>
          </tr>
          <tr>
            <td>Team Leader Shift {{$lap_hk[0]->shift}}</td>
            <td>Manager Bagian Operasi</td>
          </tr>
        </table>
    </div>
    <!-- CONTENT -->
  </div>
  
  <div class="box-bottom">
    <img src="{{public_path('images/footer.jpeg')}}" width="100%" alt="" srcset="">
  </div>
</div>