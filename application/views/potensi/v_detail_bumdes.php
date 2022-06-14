<style media="screen">
/* .card{
transition: 0.5s;
}

.form-control, .card{
border: 2px solid black;
}

*{
font-weight: bold;
} */
.btn{
  text-transform: capitalize;
  font-family: "Roboto",sans-serif;
  font-weight: bold;
}


</style>
<section id="get-started" class="padd-section wow fadeInUp">
  <div class="containers">
    <div class="col-md-12">
      <div class="row">
        <div class="col-md-12">
          <br>
          <div class="section-title text-center">
            <h2><?=$hasil->nama?></h2>
          </div>
          <!-- <div class="col-md-4"> -->
            <br><br><center><h6><img src="<?=$hasil->logo_file?>" alt="" width="400"></h6></center><br>
            <h6>Bidang : <p class="badge badge-success px-1 py-2" style="text-transform:uppercase;"><?=$hasil->bidang?></p></h6>
            <h6 class="float-left">Tanggal&ensp;: </h6>
            <p for="" class="float-left">&ensp;&ensp;<i class="fa fa-calendar">&ensp;</i><?=$hasil->tgl_berdiri?></p><br><br>
            <h6 class="float-left">Harga&ensp;&ensp;: </h6>
            <p for="" class="float-left">&ensp;&ensp;<?=$hasil->no_telp?></p><br><br>
            <h6 class="float-left">Pemesanan&ensp;&ensp;: &ensp;</h6>
            <a href="<?=$hasil->ketua?>" class="btn btn-outline-dark btn-sm">Pesan Sekarang</a>

            <!-- <a for="" class="float-left" href="<?=$hasil->ketua?>">&ensp;&ensp;<i class="fa fa-user">&ensp;</i>Tokopedia</a> -->
          <!-- </div> -->
          <br><br>
          <h1><?=$hasil->deskripsi?></h1>
        </div>
        <!-- <div class="col-md-12 mt-3">
          <hr>
          <div class="col-md-12">
            <h5>Diskusi:</h5>
            <textarea id="komen" name="name" rows="2" placeholder="Tuliskan Komentar Anda. . ." class="form-control mt-2" style=""></textarea>
            <a type="button" name="button" class="btn btn-success text-white mt-2">Kirim</a>
          </div>
          <script type="text/javascript">
          function balas(isi){
            $('#komen').val("@"+isi+" ");
            $('#komen').focus();
          }
          </script>

          <div class="col-md-12 ml-4 mt-4 float-left">
            <img class="float-left rounded-circle" src="<?=base_url("assets/img/team/1.jpg")?>" alt="" width="50" height="50">
            <h5 class="float-left" style="margin-left:20px;">Khafido</h5>
            <p class="float-left" style="margin-left:70px; margin-top:-25px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <button id="btnreply" onclick="balas('Khafido')" href="#" class="float-left" style="margin-top:-15px; margin-left:70px;">Replay</button>
          </div>
          <div class="col-md-12 ml-4 mt-4 float-left">
            <img class="float-left rounded-circle" src="<?=base_url("assets/img/team/1.jpg")?>" alt="" width="50" height="50">
            <h5 class="float-left" style="margin-left:20px;">Khafido</h5>
            <p class="float-left" style="margin-left:70px; margin-top:-25px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. lorem</p>
            <button id="btnreply" onclick="balas('Khafido')" href="#" class="float-left" style="margin-top:-15px; margin-left:70px;">Replay</button>
          </div>
        </div> -->
      </div>
    </div>
  </div>
</section>

<script type="text/javascript">
// (function ($) {
//   $.fn.replaceClass = function (pFromClass, pToClass) {
//     return this.removeClass(pFromClass).addClass(pToClass);
//   };
// }(jQuery));
//
// function pindah(num){
//   $('#pills-tab li:nth-child('+num+') a').replaceClass('disabled','enabled');
//   $('#pills-tab li:nth-child('+num+') a').tab('show');
//   $('#pills-tab li a').replaceClass('enabled','disabled');
// }
$(document).ready(function() {
  $('#rwytpengaduan').DataTable();
} );
</script>
