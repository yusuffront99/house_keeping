<div class="container">
  <div class="box-header">
    <img src="{{public_path('images/header.jpeg')}}" width="60%" alt="" srcset="">
    <img src="{{public_path('images/logo.jpeg')}}" width="20%" alt="" style="margin-left: 100px;" srcset="">
  </div>
  
  <div class="box-content">
    <!-- CONTENT -->
    <div class="content">
        <div class="title-header">
            LAPORAN HOUSE KEEPING <br> OPERATOR SHIFT G
            <br>
            <div class="text-month">
                {{$lap_hk[0]->bln_laporan}} {{$year}}
            </div>
        </div>
      <br>
      <div class="image-content">
        <img src="{{public_path('images/body_image.jpeg')}}" alt="">
      </div>
      <div class="title-bottom">
        PT PLN (PERSERO) UNIT INDUK <br>
        PEMBANGKITAN DAN PENYALURAN KALIMANTAN <br>
        UNIT PELAKSANA PEMBANGKITAN ASAM ASAM <br>
        TAHUN {{$year}}
      </div>
    </div>
    <!-- CONTENT -->
  </div>
  
  <div class="box-bottom">
    <img src="{{public_path('images/footer.jpeg')}}" width="100%" alt="" srcset="">
  </div>
</div>