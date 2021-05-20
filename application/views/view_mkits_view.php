
            <div class="row">
                <div class="col-lg-12">

                    <h1 class="page-header">Data Marketing Kits</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <a href="<?php echo base_url();?>index.php/main/add_marketing_kits" class="btn btn-primary"><i class="fa fa-plus fa-fw"></i>Tambah Marketing Kits</a>
                    <a href="<?php echo base_url();?>index.php/excel_export/action_mkits" class="nav-link js-scroll-trigger btn btn-success"><i class="fa fa-file-excel-o fa-fw"></i>Export to Excel</a>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-lg-12 table-responsive">

                    <table width="100%" class="table table-striped table-bordered table-hover " id="dataTables-example" >
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>NIK</th>
                                <th>Nama Program</th>
                                <th>Tanggal</th>
                                <th>Kebutuhan</th>
                                <th>Deskripsi</th>
                                <th>Jumlah</th>
                                <th>Timeline</th>
                                <th>Status</th>
                                <th>Note</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            $no = 1; 
                                foreach ($marketing_kits as $data) {
                                    echo'
                                        <tr>
                                            <td>'.$no.'</td>
                                            <td>'.$data->nama.'</td>
                                            <td>'.$data->nik.'</td>
                                            <td>'.$data->nm_program.'</td>
                                            <td>'.$data->tgl.'</td>
                                            <td>'.$data->kebutuhan.'</td>
                                            <td>'.$data->deskripsi.'</td>
                                            <td>'.$data->jumlah.'</td>
                                            <td>'.$data->timeline.'</td>
                                            <td>'.$data->status.'</td>
                                            <td>'.$data->note.'</td>
                                            <td>';
                                                if ($data->status == 'DONE'){
                                                    echo '<a href="" class="btn btn-info" disabled><i class="glyphicon glyphicon-edit"></i>Done</a>';
                                                } else {
                                                    echo '<a href="'.base_url().'index.php/main/edit_marketing_kits/'.$data->id_mkits.'" class="btn btn-info"><i class="glyphicon glyphicon-edit"></i>Done</a>';
                                                }
                                            '</td>
                                        </tr>';
                                    $no++;
                            }
                        ?>
                        </tbody>
                    </table>	
                    <!-- /.table-responsive -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->