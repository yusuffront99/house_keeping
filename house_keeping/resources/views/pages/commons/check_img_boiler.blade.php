@if ($rp->foto_1 == 'img_default/white.jpeg' && $rp->foto_2 == 'img_default/white.jpeg' && $rp->foto_3 == 'img_default/white.jpeg')
<img src="{{public_path('storage/img_default/white.jpeg')}}" alt="" width="190px" height="30px">
@else
<img src="{{public_path('storage/' . $rp->foto_4)}}" alt="" width="190px" height="200">  
@endif