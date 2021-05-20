<div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Data User</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <a href="<?php echo base_url();?>index.php/main/add_admin" class="btn btn-success"><i class="fa fa-plus fa-fw"></i>Tambah User</a>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-lg-12">

                    <?php
                            
                                $notif = $this->session->flashdata('notif');
                                
                                if(!empty($notif))
                                {
                                    echo '
                                        <div class="alert alert-danger">
                                                '.$notif.'
                                        </div>
                                    ';
                                }
                                
                            ?>

                    <table width="100%" class=" datatable table table-striped table-bordered table-hover" id="dataTables-example" border="0" cellpadding="4" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Username</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            $no = 1; 
                                foreach ($admin as $data) {
                                    echo'
                                        <tr>
                                            <td>'.$no.'</td>
                                            <td>'.$data->name.'</td>
                                            <td>'.$data->username.'</td>
                                            <td>'.$data->status.'</td>
                                            <td>
                                                <a href="'.base_url().'index.php/main/delete_admin/'.$data->id_user.'" onclick="return(myFunction())" class="btn btn-danger btn-sm">
                                                    <i class="glyphicon glyphicon-trash"></i> 
                                                    Hapus 
                                                </a>
                                            </td>
                                        </tr>';
                                    $no++;
                            }
                        ?>
                        <script>
                        function myFunction() {
                            if(confirm("Anda yakin ingin menghapus?"))
                            {
                                
                            } else {
                                return false;
                            }
                        }
                        </script>
                        </tbody>
                    </table>
                    <!-- /.table-responsive -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->