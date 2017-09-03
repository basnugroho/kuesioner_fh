<div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="close-modal" data-dismiss="modal">
      <div class="lr">
        <div class="rl"></div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-12 mx-auto">
          <div class="modal-body">
            <h2>Kuesioner E</h2>
            <hr class="star-primary">
            <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSdBuDGqGBqA7izqUu9PBRHXJj52_WdRL4gTQD1cevZRH7fgNw/viewform?embedded=true" width="100%" height="1000" frameborder="0" marginheight="0" marginwidth="0">Loading...</iframe>  
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
@section('scripts')
<script>

$(function(){ //document ready
    var z = $('iframe', frames['#kuesioner'].document)
    alert(z)
});

$('#mG61Hd').submit(function () {
  alert('yeah')
})
var a = $('.freebirdFormviewerViewResponseConfirmationMessage'); 
alert(a.innerHTML)
</script>
@stop