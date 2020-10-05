@php
    use App\Province;
    $city=Province::all();
@endphp
<div style="">
  <section class="footer section_space">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <h4 class="footer_title">our locations</h4>
          <ul class="list-unstyled">
            <li><i class="fas fa-map-marker-alt"></i> Maputo: Av.marine nguabie 433</li>
            <li><i class="fas fa-map-marker-alt"></i> Nampula: Av. Independencia 1016</li>
            <li><i class="fas fa-map-marker-alt"></i> Tete: Estrada No.8 matundo</li>
            <li><i class="fas fa-mobile-alt"></i> +258 84 345 0786</li>
            <li><i class="fas fa-envelope-square"></i> sales@abnasirmotors.com</li>
          </ul>
        </div>
        <div class="col-md-4">
          <h4 class="footer_title">Links</h4>
          <ul class="list-unstyled">
            @foreach ($city as $item)
              <a href="{{route('inicio.province',$item->slug)}}">
                <li>{{$item->province}}</li>
              </a>
            @endforeach

            <a href="sendemail.html">
              <li>Contact us</li>
            </a>
          </ul>
        </div>
        <div class="col-md-4">
          <h4 class="footer_title">follow us on social media</h4>
          <ul class="list-unstyled">
            <a href="https://www.facebook.com/Abnasir-Motors-108883250545005/" target="_blank">
              <li>Facebook</li>
            </a>
            <a href="https://www.instagram.com/abnasir_motors/" target="_blank">
              <li>Instagram</li>
            </a>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <div class="sb_mozmedia text-center">
    <p>Copyright &copy; 2020. All rights Reserved. Designed &amp; Developed by <a href="https://www.sbmozmedia.com/"
        target="_blank">SB.MOZMEDIA - Digital
        Marketing Agency</a></p>
  </div>
</div>