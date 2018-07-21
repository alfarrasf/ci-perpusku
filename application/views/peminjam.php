

    <div class="push large"></div>

    <div class="container">
      <form>
        <div class="form-group row">
          <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">ID</label>
          <div class="col-sm-10">
          <input type="text" class="form-control form-control-sm" id="id" placeholder="Enter Kode">
          </div>
        </div>
        <div class="form-group row">
          <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Nama</label>
          <div class="col-sm-10">
          <input type="text" class="form-control form-control-sm" id="nama" placeholder="Enter Nama">
          </div>
        </div>
        <div class="form-group row">
          <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Alamat</label>
          <div class="col-sm-10">
          <input type="text" class="form-control form-control-sm" id="alamat" placeholder="Enter Alamat">
          </div>
        </div>
        <div class="form-group row">
          <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Telepon</label>
          <div class="col-sm-10">
          <input type="text" class="form-control form-control-sm" id="telepon" placeholder="Enter Telepon">
          </div>
        </div>
        <div class="form-group row">
          <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">User</label>
          <div class="col-sm-10">
          <input type="text" class="form-control form-control-sm" id="user" placeholder="Enter User">
          </div>
        </div>
        <div class="form-group row">
          <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Password</label>
          <div class="col-sm-10">
          <input type="Password" class="form-control form-control-sm" id="password" placeholder="Enter Password">
          </div>
        </div>
        <div class="form-group row">
          <div class="col-sm-10 offset-sm-2">
          <button id="btn-save" type="submit" class="btn btn-primary">Submit</button>
          <button id="btn-save" type="reset" class="btn btn-primary">Reset</button>
          </div>
        </div>
      </form>
    </div>

    <div class="push large"></div>
    <div class="container">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nama</th>
            <th scope="col">Alamat</th>
            <th scope="col">Telepon</th>
            <th scope="col">User</th>
            <th scope="col">Password</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody id="show_data">
        </tbody>
      </table>
    </div>

    <div class="modal fade" tabindex="-1" role="dialog" id="modalEdit">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Edit Data</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="form-group row">
              <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Nama</label>
              <div class="col-sm-10">
              <input type="text" class="form-control form-control-sm" id="edit-nama" placeholder="Enter Nama">
              </div>
            </div>
            <div class="form-group row">
              <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Alamat</label>
              <div class="col-sm-10">
              <input type="text" class="form-control form-control-sm" id="edit-alamat" placeholder="Enter Alamat">
              </div>
            </div>
            <div class="form-group row">
              <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Telepon</label>
              <div class="col-sm-10">
              <input type="text" class="form-control form-control-sm" id="edit-telepon" placeholder="Enter Telepon">
              </div>
            </div>
            <div class="form-group row">
              <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">User</label>
              <div class="col-sm-10">
              <input type="text" class="form-control form-control-sm" id="edit-user" placeholder="Enter User">
              </div>
            </div>
            <div class="form-group row">
              <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Password</label>
              <div class="col-sm-10">
              <input type="Password" class="form-control form-control-sm" id="edit-pass" placeholder="Enter Password">
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <input type="hidden" name="id" id="edit-id">
            <button type="button" class="btn btn-primary" id="btn-edit-save">Save changes</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
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
            url : "<?php echo site_url('data/peminjam_list'); ?>",
            dataType : "JSON",
            success : function(data) {
              var html = '';
              var i;
              for(i=0; i<data.length; i++) {
                
                html += '<tr>' +
                        '<td>' + (i+1) + '</td>' +
                        '<td>' + data[i].nm_pmj + '</td>' +
                        '<td>' + data[i].almt_pmj + '</td>' +
                        '<td>' + data[i].phone + '</td>' +
                        '<td>' + data[i].user + '</td>' +
                        '<td>' + data[i].pass + '</td>' +
                        '<td>' + '<a class="edit" data-id="' + data[i].id_pmj + '" data-nama="' + data[i].nm_pmj + '" data-alamat="' + data[i].almt_pmj+ '" data-telepon="'+ data[i].phone +'" data-user="' + data[i].user +'" data-pass="' + data[i].pass + '" style="cursor:pointer"><i class="material-icons">settings</i></a><a class="delete" data-delete="' + data[i].id_pmj + '" style="cursor:pointer"><i class="material-icons">clear</i></a><a class="flag" data-id="' + data[i].id_pmj + '" data-flag="' + data[i].flag +'</td>' +  
                        '</tr>'
              }
              $('#show_data').html(html);
            }
          });
        }

        // save subscriber
        $('#btn-save').on('click', function() {
          var nama = $('#nama').val();
          var alamat = $('#alamat').val();
          var telepon = $('#telepon').val();
          var user = $('#user').val();
          var password = $('#password').val();
          $.ajax({
            type : "POST",
            url : "<?php echo site_url('Data/save_peminjam'); ?>",
            dataType : "JSON",
            data : {nama : nama, alamat : alamat, telepon : telepon, user : user, password : password},
            success : function() {
              $('[name="kota"]').val("");
              show_subs();
            }
          });
          return false;
        });

        $('#btn-delete').on('click', function() {
          var id_pmj = $('#delete-id').val();
          $.ajax({
            type : "POST",
            url : "<?php echo site_url('Data/delete_peminjam'); ?>",
            dataType : "JSON",
            data : {id_pmj : id_pmj},
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

        $('#btn-edit-save').on('click', function() {
          var id = $('#edit-id').val();
          var nama = $('#edit-nama').val();
          var alamat = $('#edit-alamat').val();
          var telepon = $('#edit-telepon').val();
          var user = $('#edit-user').val();
          var pass = $('#edit-pass').val();

          $.ajax({
            type : "POST",
            url : "<?php echo site_url('Data/edit_peminjam'); ?>",
            dataType : "JSON",
            data : {id : id, nama : nama, alamat : alamat, telepon : telepon, user : user, pass : pass},
            success : function() {
              $('#editKategori').val("");
              $("#modalEdit").modal('hide');
              show_subs();
            }
          });
          return false;
        });

        $('#show_data').on('click','.edit',function(){

          var id   = $(this).data('id');
          var nama = $(this).data('nama');
          var alamat = $(this).data('alamat');
          var telepon = $(this).data('telepon');
          var user = $(this).data('user');
          var pass = $(this).data('pass');

          $("#edit-id").val(id);
          $("#edit-nama").val(nama);
          $("#edit-alamat").val(alamat);
          $("#edit-telepon").val(telepon);
          $("#edit-user").val(user);
          $("#edit-pass").val(pass);

          $("#modalEdit").modal('show');

        });
      });
       
    </script>
  </body>
</html>