<!-- @if ($rp->foto_ == 'img_default/white.jpeg' && $rp->foto_5 == 'img_default/white.jpeg' && $rp->foto_6 == 'img_default/white.jpeg')
<td><img src="{{public_path('storage/img_default/white.jpeg')}}" alt="" width="190px" height="30px"></td>
<td><img src="{{public_path('storage/img_default/white.jpeg')}}" alt="" width="190px" height="30px"></td>
<td><img src="{{public_path('storage/img_default/white.jpeg')}}" alt="" width="190px" height="30px"></td>
@else

<img src="{{public_path('storage/' . $rp->foto_4)}}" alt="" width="190px" height="200">  
@endif -->