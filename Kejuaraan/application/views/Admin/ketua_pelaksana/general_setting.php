        

            
        <div class="animation-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header">Dasar Pengelompokan Kategori</h3>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Kategori usia
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="tabel_kategori_usia">
                                <thead>
                                    <tr>
                                        <th>Nama Kategori</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Umur Minimal</th>
                                        <th>Umur Maksimal</th>
                                        <th>Acuan Tanggal</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($data_kategori_usia as $data ): ?>
                                        <?php echo '
                                                <tr>
                                                    <td>'.$data->nama_kategori.'</td>
                                                    <td>'.$data->jenis_kelamin.'</td>
                                                    <td>'.$data->min_umur.'</td>
                                                    <td>'.$data->max_umur.'</td>
                                                    <td>'.$data->acuan_tanggal.'</td>
                                                    <td>
                                                        <div class="col-lg-6">
                                                            <button class="btn btn-sm btn-block btn-info" onclick="modal_edit_kategori_usia('.$data->id_kategori_usia.')">edit</button>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <button class="btn btn-sm btn-block btn-danger" onclick="hapus_kategori_usia('.$data->id_kategori_usia.')">hapus</button>
                                                            
                                                        </div>
                                                    </td>
                                                </tr>
                                        ' ?>    
                                    <?php endforeach ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.panel-body -->
                        <div class="panel-footer text-center">
                            <button class="btn btn-info" onclick="modal_tambah_kategori_usia()">Tambah (single row)</button>
                            <button class="btn btn-success">Tambah (multiple row) </button>
                        </div>
                    </div>
                    <!-- /.panel -->
                </div>                
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            Kategori Lomba 
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="tabel_kategori_lomba">
                                <thead>
                                    <tr>
                                        <th>Nama Kategori Lomba</th>
                                        <th>Usia</th>
                                        <th>Keterangan</th>
                                        <th></th>
                                    </tr>
                                    <?php foreach ($data_kategori_lomba as $data ): ?>
                                        <?php echo '
                                                <tr>
                                                    <td>'.$data->nama_kategori_lomba.' - '.$data->nama_kategori.' / '.$data->jenis_kelamin.'</td>
                                                    <td>'.$data->min_umur.' - '.$data->max_umur.'</td>
                                                    <td>'.$data->keterangan.'</td>
                                                    <td>
                                                        <div class="col-lg-6">
                                                            <button class="btn btn-sm btn-block btn-info" onclick="modal_edit_kategori_lomba('.$data->id_kategori_lomba.')">edit</button>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <button class="btn btn-sm btn-block btn-danger" onclick="hapus_kategori_lomba('.$data->id_kategori_lomba.')">hapus</button>
                                                            
                                                        </div>
                                                    </td>
                                                </tr>
                                        ' ?>    
                                    <?php endforeach ?>
                                </thead>
                                <tbody></tbody>
                            </table>
                        </div>
                        <div class="panel-footer text-center">
                            <button class="btn btn-info" onclick="modal_tambah_kategori_lomba()">Tambah (single row)</button>
                            <button class="btn btn-success">Tambah (multiple row) </button>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-success">
                        <div class="panel-heading">
                            Kelas Tanding
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="tabel_kategori_kelas_tanding">
                                <thead>
                                    <tr>
                                        <th>Kategori</th>
                                        <th>Label</th>
                                        <th>Berat Minimal</th>
                                        <th>Berat Maksimal</th>
                                        <th>Keterangan</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($data_kategori_kelas_tanding as $data ): ?>
                                        <?php echo '
                                                <tr>
                                                    <td>'.$data->nama_kategori_lomba.' - '.$data->nama_kategori.' / '.$data->jenis_kelamin.'</td>
                                                    <td>'.$data->label.'</td>
                                                    <td>'.$data->berat_minimal.'</td>
                                                    <td>'.$data->berat_maksimal.'</td>
                                                    <td>'.$data->keterangan.'</td>
                                                    <td>
                                                        <div class="col-lg-6">
                                                            <button class="btn btn-sm btn-block btn-info" onclick="modal_edit_kategori_kelas_tanding('.$data->id_kelas_tanding.')">edit</button>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <button class="btn btn-sm btn-block btn-danger" onclick="hapus_kategori_lomba('.$data->id_kategori_lomba.')">hapus</button>
                                                            
                                                        </div>
                                                    </td>
                                                </tr>' ?>    
                                    <?php endforeach ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.panel-body -->
                        <div class="panel-footer text-center">
                            <button class="btn btn-info" onclick="modal_tambah_kategori_kelas_tanding()">Tambah (single row)</button>
                            <button class="btn btn-success">Tambah (multiple row) </button>
                        </div>
                    </div>
                    <!-- /.panel -->
                </div>
            </div>
        </div>
            

            <!-- Modal -->
            <div id="modal_kategori_usia" class="modal fade" role="dialog">
              <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"></h4>
                  </div>
                  <div class="modal-body">
                     <form role="form" id="form_kategori_usia">
                        <input type="hidden"  name="url">
                      <div class="form-group">
                        <label for="nama_kategori">Nama Kategori Usia :</label>
                        <input type="text" class="form-control" name="nama_kategori" required="required">
                      </div>
                      <div class="form-group">
                        <label for="nama_kategori">Jenis Kelamin :</label>
                          <div class="radio">
                              <label><input type="radio" name="jenis_kelamin" value="putra">Laki-laki</label>
                              <label><input type="radio" name="jenis_kelamin" value="putri">Perempuan</label>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="min_umur">Umur minimal :</label>
                        <input type="text" class="form-control" name="min_umur" required="required">
                      </div>
                      <div class="form-group">
                        <label for="max_umur">Umur maksimal :</label>
                        <input type="text" class="form-control" name="max_umur" required="required">
                      </div>
                      <div class="form-group">
                        <label for="acuan_tanggal">Acuan tanggal :</label>
                        <input type="date" class="form-control" name="acuan_tanggal" required="required">
                      </div>
                  </div>
                  <div class="modal-footer">
                      <button type="button" class="btn btn-success" onclick="submit_kategori_usia();">Submit</button>
                    </form>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  </div>
                </div>

              </div>
            </div>

            <div id="modal_kategori_lomba" class="modal fade" role="dialog">
              <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"></h4>
                  </div>
                  <div class="modal-body">
                    <form role="form" id="form_kategori_lomba">
                        <input type="hidden"  name="url">
                      <div class="form-group">
                        <label for="nama_kategori_lomba">Nama Kategori Lomba :</label>
                        <input type="text" class="form-control" name="nama_kategori_lomba" required="required">
                      </div>
                      <div class="form-group">
                        <label for="id_kategori_usia">Kategori usia</label>
                        <select name="id_kategori_usia" class="form-control">
                            <?php foreach ($data_kategori_usia as $data ): ?>
                                <?php echo '<option value="'.$data->id_kategori_usia.'">'.$data->nama_kategori.' / '.$data->jenis_kelamin.'</option>' ?>
                            <?php endforeach ?>
                            <option></option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="keterangan">Keterangan :</label>
                        <textarea name="keterangan" class="form-control"></textarea>
                      </div>
                  </div>
                  <div class="modal-footer">
                      <button type="button" class="btn btn-success" onclick="submit_kategori_lomba()">Submit</button>
                    </form>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>

            <div id="modal_kategori_kelas_tanding" class="modal fade" role="dialog">
              <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Modal Header</h4>
                </div>
                <div class="modal-body">
                    <form role="form" id="form_kategori_kelas_tanding">
                       <input type="hidden"  name="url">
                      <div class="form-group">
                        <label for="label">Label kelas tanding :</label>
                        <input type="text" class="form-control" name="label" required="required">
                      </div>
                      <div class="form-group">
                        <label for="id_kategori_usia">Kategori lomba</label>
                        <select name="id_kategori_lomba" class="form-control">
                            <?php foreach ($data_kategori_lomba as $data ): ?>
                                <?php echo '<option value="'.$data->id_kategori_lomba.'">'.$data->nama_kategori_lomba.' / '.$data->nama_kategori.'-'.$data->jenis_kelamin.'</option>' ?>
                            <?php endforeach ?>
                            <option></option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="berat_minimal">Berat minimal :</label>
                        <input type="text" class="form-control" name="berat_minimal" required="required">
                      </div>
                      <div class="form-group">
                        <label for="berat_maksimal">Berat maksimal :</label>
                        <input type="text" class="form-control" name="berat_maksimal" required="required">
                      </div>
                      <div class="form-group">
                        <label for="keterangan">Keterangan :</label>
                        <textarea name="keterangan" class="form-control"></textarea>
                      </div>
                  </div>
                  <div class="modal-footer">
                      <button type="button" class="btn btn-success" onclick="submit_kategori_kelas_tanding()">Submit</button>
                    </form>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  </div>
                </div>
            </div>
        </div>

        <script>
        function modal_tambah_kategori_usia(){
            $('#modal_kategori_usia .modal-header h4').html('Tambah kategori Usia');
            $('#form_kategori_usia [name="url"]').val('<?php echo base_url('index.php/Admin/insert_kategori_usia') ?>');
            $('#modal_kategori_usia').modal('show');
        }

        function modal_edit_kategori_usia($id_kategori){
            $('#modal_kategori_usia .modal-header h4').html('Edit kategori Usia');
            $.getJSON('<?php echo base_url('index.php/Admin/get_specific_kategori_usia') ?>/'+$id_kategori , function(json, textStatus) {
                $('#form_kategori_usia [name="nama_kategori"]').val(json.nama_kategori);
                if (json.jenis_kelamin == "putra") {
                    $('#form_kategori_usia [value="putra"]').attr('checked', 'checked');
                }else{
                    $('#form_kategori_usia [value="putri"]').attr('checked','checked');
                }
                $('#form_kategori_usia [name="min_umur"]').val(json.min_umur);
                $('#form_kategori_usia [name="max_umur"]').val(json.max_umur);
                $('#form_kategori_usia [name="acuan_tanggal"]').val(json.acuan_tanggal);
            });
            $('#form_kategori_usia [name="url"]').val('<?php echo base_url('index.php/Admin/edit_kategori_usia/') ?>'+$id_kategori);
            $('#modal_kategori_usia').modal('show')
        }

         function submit_kategori_usia(){
            $('#modal_kategori_usia').modal('hide');
            $.post($('#form_kategori_usia [name="url"]').val(), $('#form_kategori_usia').serialize() , function(data, textStatus, xhr) {
                var e = JSON.parse(data)
                    if (e.status == "success") {
                        swal('Success !!' , 'Operasi data berhasil', 'success');
                    }else{
                        swal('Error', 'Please contact system administrator', 'error');
                    }
            });
            setTimeout(function(){ load_general_setting(); }, 700) 
        }



        function hapus_kategori_usia($id_kategori){
            $.post('<?php echo base_url('index.php/Admin/cek_ketergantungan_kategori_usia') ?>', {id: $id_kategori}, function(data, textStatus, xhr) {
                    var e = JSON.parse(data)
                if (e.status == true) {
                    swal('Error', 'Data sedang dalam keadaan terpakai', 'error');

                }else{
                   swal({
                      title: "Are you sure?",
                      text: "Data ini akan dihapus !!!",
                      type: "warning",
                      showCancelButton: true,
                      confirmButtonClass: "btn-danger",
                      confirmButtonText: "Yes, delete it!",
                      closeOnConfirm: false
                    },
                    function(){
                        $.post('<?php echo base_url('index.php/Admin/hapus_kategori_usia') ?>', {id_kategori : $id_kategori} , function(data, textStatus, xhr) {
                            var e = JSON.parse(data)
                            if (e.status == "success") {
                                swal('Success !!' , 'Data berhasil dihapus', 'success');
                            }else{
                                swal('Error', 'Error Insert data. Please contact system administrator', 'error');
                            }
                        });
                         load_general_setting();
                    }); 

                }
            });
            
        }



        function modal_tambah_kategori_lomba(){
            $('#modal_kategori_lomba .modal-header h4').html('Tambah kategori Lomba');
            $('#form_kategori_lomba [name="url"]').val('<?php echo base_url('index.php/Admin/insert_kategori_lomba') ?>');
            $('#modal_kategori_lomba').modal('show');
        }

        function modal_edit_kategori_lomba($id_kategori){
            $('#modal_kategori_lomba .modal-header h4').html('Edit kategori Lomba');
            $.getJSON('<?php echo base_url('index.php/Admin/get_specific_kategori_lomba') ?>/'+$id_kategori , function(json, textStatus) {
                $('#form_kategori_lomba [name="nama_kategori_lomba"]').val(json.nama_kategori_lomba);
                $('#form_kategori_lomba select option[value="'+json.id_kategori_usia+'"]').select()
                $('#form_kategori_lomba [name="keterangan"]').val(json.keterangan);
            });
            $('#form_kategori_lomba [name="url"]').val('<?php echo base_url('index.php/Admin/edit_kategori_lomba/') ?>'+$id_kategori);
            $('#modal_kategori_lomba').modal('show')
        }

        function hapus_kategori_lomba($id_kategori){
            swal({
              title: "Are you sure?",
              text: "Data ini akan dihapus !!!",
              type: "warning",
              showCancelButton: true,
              confirmButtonClass: "btn-danger",
              confirmButtonText: "Yes, delete it!",
              closeOnConfirm: false
            },
            function(){
                $.post('<?php echo base_url('index.php/Admin/hapus_kategori_lomba') ?>', {id_kategori : $id_kategori} , function(data, textStatus, xhr) {
                    var e = JSON.parse(data)
                    if (e.status == "success") {
                        swal('Success !!' , 'Data berhasil dihapus', 'success');
                    }else{
                        swal('Error', 'Error deleting data. Please contact system administrator', 'error');
                    }
                });
                 load_general_setting();
            });
        }


     
        function submit_kategori_lomba(){
            $('#modal_kategori_lomba').modal('hide');
            $.post($('#form_kategori_lomba [name="url"]').val(), $('#form_kategori_lomba').serialize() , function(data, textStatus, xhr) {
              if (textStatus == "success") {
                swal('Success !!' , 'Operasi data berhasil', 'success');
              }else{
                swal('Error', 'Please contact system administrator', 'error');
              }
            });
                            
        }
      




        /*KATEGORI KELAS TANDING*/

         function modal_tambah_kategori_kelas_tanding(){
            $('#modal_kategori_kelas_tanding .modal-header h4').html('Tambah kategori kelas tanding');
            $('#form_kategori_kelas_tanding [name="url"]').val('<?php echo base_url('index.php/Admin/insert_kategori_kelas_tanding') ?>');
            $('#modal_kategori_kelas_tanding').modal('show');
        }

        function modal_edit_kategori_kelas_tanding($id_kategori){
            $('#modal_kategori_kelas_tanding .modal-header h4').html('Edit kategori kelas tanding');
            $.getJSON('<?php echo base_url('index.php/Admin/get_specific_kategori_kelas_tanding') ?>/'+$id_kategori , function(json, textStatus) {
                $('#form_kategori_kelas_tanding [name="label"]').val(json.label);
                $('#form_kategori_kelas_tanding [name="berat_minimal"]').val(json.berat_minimal);
                $('#form_kategori_kelas_tanding [name="berat_maksimal"]').val(json.berat_maksimal);
                $('#form_kategori_kelas_tanding select option[value="'+json.id_kategori_lomba+'"]').select()
                $('#form_kategori_kelas_tanding [name="keterangan"]').val(json.keterangan);
            });
            $('#form_kategori_kelas_tanding [name="url"]').val('<?php echo base_url('index.php/Admin/edit_kategori_kelas_tanding/') ?>'+$id_kategori);
            $('#modal_kategori_kelas_tanding').modal('show')
        }

        function hapus_kategori_kelas_tanding($id_kategori){
            swal({
              title: "Are you sure?",
              text: "Data ini akan dihapus !!!",
              type: "warning",
              showCancelButton: true,
              confirmButtonClass: "btn-danger",
              confirmButtonText: "Yes, delete it!",
              closeOnConfirm: false
            },
            function(){
                $.post('<?php echo base_url('index.php/Admin/hapus_kategori_kelas_tanding') ?>', {id_kategori : $id_kategori} , function(data, textStatus, xhr) {
                    var e = JSON.parse(data)
                    if (e.status == "success") {
                        swal('Success !!' , 'Data berhasil dihapus', 'success');
                    }else{
                        swal('Error', 'Error deleting data. Please contact system administrator', 'error');
                    }
                });
                 load_general_setting();
            });
        }


     
        function submit_kategori_kelas_tanding(){
            $('#modal_kategori_kelas_tanding').modal('hide');
            $.post($('#form_kategori_kelas_tanding [name="url"]').val(), $('#form_kategori_kelas_tanding').serialize() , function(data, textStatus, xhr) {
                    if (textStatus == "success") {
                        swal('Success !!' , 'Operasi data berhasil', 'success');
                    }else{
                        swal('Error', 'Please contact system administrator', 'error');
                    }
            });
            return false;
                            
        }

            </script>
