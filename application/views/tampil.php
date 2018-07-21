

    <div class="push large"></div>
    <div class="container">
    <div class="push large"></div>
    <div class="container">
      <div class="form-row">
        <div class="offset-sm-7 col-sm-4 mb-2">
          <input type="text" class="form-control form-control-sm" id="cari-buku" placeholder="Enter Judul Buku">
        </div>
        <div class="col-sm-1 mb-2">
          <button class="btn btn-primary btn-sm form-control " id="btn-cari">Search</button>
        </div>
      </div>
    </div>
    </div>

    <div class="push large"></div>
    <div class="container">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Judul</th>
            <th scope="col">Penerbit</th>
            <th scope="col">Pengarang</th>
            <th scope="col">Tahun Terbit</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody id="show_data">
        </tbody>
      </table>
    </div>

    <div class="modal fade" tabindex="-1" role="dialog" id="modalTampil">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Transaksi Peminjaman</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="form-group row">
              <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">ID Transaksi</label>
              <div class="col-sm-10">
              <input type="text" class="form-control form-control-sm" id="pjm-idt" placeholder="Enter Id Transaksi">
              </div>
            </div>
            <div class="form-group row">
              <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">ID Buku</label>
              <div class="col-sm-10">
              <input type="text" class="form-control form-control-sm" id="pjm-idb" placeholder="Enter Id Buku">
              </div>
            </div>
            <div class="form-group row">
              <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">ID Peminjam</label>
              <div class="col-sm-10">
              <input type="text" class="form-control form-control-sm" id="pjm-idp" placeholder="Enter Id Peminjam">
              </div>
            </div>                        
            <div class="form-group row">
              <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Tanggal Peminjaman</label>
              <div class="col-sm-10">
              <input type="date" class="form-control form-control-sm" id="edit-penerbit" placeholder="Enter Tanggal Peminjaman">
              </div>
            </div>
            <div class="form-group row">
              <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Tanggal Kembali</label>
              <div class="col-sm-10">
              <input type="date" class="form-control form-control-sm" id="edit-pengarang" placeholder="Enter Tangal Kembali">
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <input type="hidden" name="id" id="pjm-id">
            <button type="button" class="btn btn-primary" id="btn-pjm" href>Pinjam</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
          </div>
        </div>
      </div>
    </div>


    <div class="modal fade" tabindex="-1" role="dialog" id="modalDelete">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Delete Data</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
              <p>Are you sure want to delete this record?</p>
          </div>
          <div class="modal-footer">
            <input type="hidden" name="id" id="delete-id">
            <button type="button" class="btn btn-primary" id="btn-delete">Delete</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?php echo base_url(); ?>assets/js/jquery-3.2.1.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/popper.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function() {
        show_subs();

        // lihat subscriber
        function show_subs() {
          $.ajax({
            type : "AJAX",
            url : "<?php echo site_url('data/buku_list'); ?>",
            dataType : "JSON",
            success : function(data) {
              var html = '';
              var i;
              for(i=0; i<data.length; i++) {
                html += '<tr>' +
                        '<td>' + (i+1) + '</td>' +
                        '<td>' + data[i].jdl_buku + '</td>' +
                        '<td>' + data[i].penerbit + '</td>' +
                        '<td>' + data[i].pengarang + '</td>' +
                        '<td>' + data[i].tahun + '</td>' +
                        '<td>' + '<a class="edit" data-id="' + data[i].id_buku + '" data-judul="' + data[i].jdl_buku + '" data-penerbit="' + data[i].penerbit+ '" data-pengarang="'+ data[i].pengarang +'" data-tahun="'+ data[i].tahun +'"</a><button>Pinjam</button></td>'
                        '</tr>'
              }
              $('#show_data').html(html);
            }
          });
        }

        $('#btn-cari').on('click',function () {
          var cari = $('#cari-buku').val();
          $.ajax({
            type : "POST",
            url : "<?php echo site_url('data/cari_buku'); ?>",
            dataType : "JSON",
            data : {cari:cari},
            success : function(data) {
              var html = '';
              var i;
              for(i=0; i<data.length; i++) {
                html += '<tr>' +
                        '<td>' + (i+1) + '</td>' +
                        '<td>' + data[i].jdl_buku + '</td>' +
                        '<td>' + data[i].penerbit + '</td>' +
                        '<td>' + data[i].pengarang + '</td>' +
                        '<td>' + data[i].tahun + '</td>' +
                        '<td>' + '<a class="edit" data-id="' + data[i].id_buku + '" data-judul="' + data[i].jdl_buku + '" data-penerbit="' + data[i].penerbit+ '" data-pengarang="'+ data[i].pengarang +'" data-tahun="'+ data[i].tahun +'" style="cursor:pointer"><i class="material-icons">settings</i></a><a class="delete" data-delete="' + data[i].id_buku + '" style="cursor:pointer"><i class="material-icons">clear</i></a></td>' +  
                        '</tr>'
              }
              $('#show_data').html(html);
            }
          });
        });


        // save subscriber
        $('#btn-save').on('click', function() {
          var judul = $('#judul').val();
          var penerbit = $('#penerbit').val();
          var pengarang = $('#pengarang').val();
          var tahun = $('#tahun').val();
          $.ajax({
            type : "POST",
            url : "<?php echo site_url('Data/save_buku'); ?>",
            dataType : "JSON",
            data : {judul : judul, penerbit : penerbit, pengarang : pengarang, tahun : tahun},
            success : function() {
              $('[name="kota"]').val("");
              show_subs();
            }
          });
          return false;
        });

        $('#btn-delete').on('click', function() {
          var id_buku = $('#delete-id').val();
          $.ajax({
            type : "POST",
            url : "<?php echo site_url('Data/delete_buku'); ?>",
            dataType : "JSON",
            data : {id_buku : id_buku},
            success : function() {
              $("#modalDelete").modal('hide');
              show_subs();
            }
          });
          return false;
        });

        $('#show_data').on('click','.delete',function(){

          var id   = $(this).data('delete');

          $("#delete-id").val(id);

          $("#modalDelete").modal('show');

        });

        $('#btn-pjm').on('click', function() {
          var id = $('#edit-id').val();
          var judul = $('#edit-judul').val();
          var penerbit = $('#edit-penerbit').val();
          var pengarang = $('#edit-pengarang').val();
          var tahun = $('#edit-tahun').val();
          $.ajax({
            type : "POST",
            url : "<?php echo site_url('Data/tampil'); ?>",
            dataType : "JSON",
            data : {id : id, judul : judul, penerbit : penerbit, pengarang : pengarang, tahun : tahun},
            success : function() {
              $('#editKategori').val("");
              $("#modalTampil").modal('hide');
              show_subs();
            }
          });
          return false;
        });

        $('#show_data').on('click','.edit',function(){

          var id   = $(this).data('id');
          var judul = $(this).data('judul');
          var penerbit = $(this).data('penerbit');
          var pengarang = $(this).data('pengarang');
          var tahun = $(this).data('tahun');

          $("#edit-id").val(id);
          $("#edit-judul").val(judul);
          $("#edit-penerbit").val(penerbit);
          $("#edit-pengarang").val(pengarang);
          $("#edit-tahun").val(tahun);

          $("#modalEdit").modal('show');

        });

      });
    </script>
  </body>
</html>