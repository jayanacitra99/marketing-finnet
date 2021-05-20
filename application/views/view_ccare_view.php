<div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Data Customer Care</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <a href="<?php echo base_url();?>index.php/main/add_customer_care" class="btn btn-primary"><i class="fa fa-plus fa-fw"></i>Tambah Customer Care</a>
                    <a href="<?php echo base_url();?>index.php/excel_export/action_ccare" class="nav-link js-scroll-trigger btn btn-success"><i class="fa fa-file-excel-o fa-fw"></i>Export to Excel</a>
                    <form action="<?php echo base_url();?>index.php/excel_export/upload_ccare" method="post" enctype="multipart/form-data">
                        <div class="form-group" style="margin-top:20px">
                            <input type="file" name="file"/>
                            <br>
                            <input type="submit" value="Import from Excel" class="nav-link js-scroll-trigger btn btn-success"/>
                        </div>
                    </form>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-lg-12 table-responsive">

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

                    <table width="100%" class="datatable table table-striped table-bordered table-hover" id="dataTables-example" border="0" cellpadding="4" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Tanggal</th>
                                <th>Agenda</th>
                                <th>Pic</th>
                                <th>Divisi</th>
                                <th>Jam</th>
                                <th>Penjelasan Produk Sekilas</th>
                                <th>Tempat Sosialisasi</th>
                                <th>Nama Tools Pengecekan</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            $no = 1; 
                                foreach ($ccare as $data) {
                                    echo'
                                        <tr>
                                            <td>'.$no.'</td>
                                            <td>'.$data->tanggal.'</td>
                                            <td>'.$data->agenda.'</td>
                                            <td><img width="100px" src="'.base_url().'uploads/'.$data->pic.'"></td>
                                            <td>'.$data->divisi.'</td>
                                            <td>'.$data->jam.'</td>
                                            <td>'.$data->p_produk.'</td>
                                            <td>'.$data->tempat.'</td>
                                            <td>'.$data->nm_tools.'</td>
                                            <td>
                                                <a href="'.base_url().'index.php/main/delete_admin/'.$data->id_ccare.'" onclick="return(myFunction())" class="btn btn-danger btn-sm">
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