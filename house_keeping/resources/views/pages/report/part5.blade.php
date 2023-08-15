<div class="container">
  <div class="box-header-4">
    <img src="{{public_path('images/header.jpeg')}}" width="60%" alt="" srcset="">
    <img src="{{public_path('images/logo.jpeg')}}" width="20%" alt="" style="margin-left: 100px;" srcset="">
  </div>
  
  <div class="box-content">
    <!-- CONTENT -->
    <div class="content-3">
       <!-- CONTENT -->
    <div class="content-page3">
     2. Bahan dan Peralatan yang digunakan :
        <ol style="list-style-type: lower-alpha; margin-left:-10px; font-weight:normal;">
          <li>Sarung Tangan</li>
          <li>Blower</li>
          <li>Majun</li>
          <li>Kuas</li>
          <li>Sikat Kawat</li>
          <li>Deterjen</li>
          <li>Sapu</li>
          <li>Ember</li>
        </ol>
    </div>
    <div class="content-page3">
     3. Pelaksanaan House Keeping :
        <ol style="list-style-type: lower-alpha; margin-left:-10px; font-weight:normal;">
          <li>Area Turbine
            <ul style="margin-left: -30px;">
              <li>{{$lap_hk[0]->op_turbine1}}</li>
              <li>{{$lap_hk[0]->op_turbine2}}</li>
            </ul>
          </li>
          <li>Area Boiler
            <ul style="margin-left: -30px;">
              <li>{{$lap_hk[0]->op_boiler1}}</li>
            </ul>
          </li>
        </ol>
    </div>

    <div class="content-page3">
     4. Evaluasi dan Rekomendasi:
     <div style="margin-left: 0px;">
        <table class="table-bordered text-center">
          <tr>
            <th id="th-evaluasi">Evaluasi</th>
            <th id="th-rekomendasi">Rekomendasi</th>
            <th id="th-pic">PIC</th>
          </tr>

          <tr>
            <td id="empty"></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td id="empty"></td>
            <td></td>
            <td></td>
          </tr>
        </table>
      </div>
    </div>
  <br>
    <div class="content-page3">
     5. Kesimpulan:
        <div style="font-weight: normal; margin-left:-10px; text-align:justify;">
          {!!$lap_hk[0]->conclusion!!}
        </div>
    </div>
    <!-- CONTENT -->
    </div>
    <!-- CONTENT -->
  </div>
  
  <div class="box-bottom">
    <img src="{{public_path('images/footer.jpeg')}}" width="100%" alt="" srcset="">
  </div>
</div>