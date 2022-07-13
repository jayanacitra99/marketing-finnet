<div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Data Sponsorship</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <a href="<?php echo base_url();?>index.php/main/add_sponsorship" class="btn btn-primary"><i class="fa fa-plus fa-fw"></i>Tambah Sponsorship</a>
                    <a href="<?php echo base_url();?>index.php/excel_export/action_sponsorship" class="nav-link js-scroll-trigger btn btn-success"><i class="fa fa-file-excel-o fa-fw"></i>Export to Excel</a>
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
                                <th rowspan="3">No</th>
                                <th colspan="6">Dasar Permintaan</th>
                                <th colspan="5">Nama Partner</th>
                                <th rowspan="3">Jenis</th>
                                <th colspan="9">Target Pelaksanaan Event/Sponsorship</th>
                                <th colspan="4">Status Pelaksanaan Event/Sponsorship</th>
                                <th colspan="3">Status Pembayaran</th>
                                <th rowspan="3">Status</th>
                                <th rowspan="3">Note</th>
                                <th rowspan="3">Aksi</th>
                            </tr>
                            <tr>
                                <th rowspan="2">Tanggal</th>
                                <th rowspan="2">No. Surat</th>
                                <th rowspan="2">Perihal</th>
                                <th rowspan="2">Info Detil</th>
                                <th colspan="2">Catatan Disposisi Mgt/Deal dgn Partner</th>
                                <th rowspan="2">Institusi</th>
                                <th rowspan="2">Nama PIC</th>
                                <th rowspan="2">Telp PIC</th>
                                <th rowspan="2">No.Rek</th>
                                <th rowspan="2">Bank</th>
                                <th rowspan="2">Tanggal</th>
                                <th rowspan="2">Biaya</th>
                                <th rowspan="2">Lokasi</th>
                                <th colspan="2">Audiens</th>
                                <th colspan="2">Produk</th>
                                <th colspan="2">Marketing KITS</th>
                                <th colspan="2">Batal</th>
                                <th colspan="2">Dilaksanakan</th>
                                <th rowspan="2">Jml di Bayar</th>
                                <th rowspan="2">Tgl Document ke Finance</th>
                                <th rowspan="2">Tgl Transfer</th>
                            </tr>
                            <tr>
                                <th>Nama</th>
                                <th>Catatan</th>
                                <th>Jumlah</th>
                                <th>Kategori</th>
                                <th>Nama</th>
                                <th>Konsep</th>
                                <th>Nama</th>
                                <th>Jumlah</th>
                                <th>Tanggal</th>
                                <th>Alasan</th>
                                <th>Tanggal</th>
                                <th>Bentuk Kegiatan</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            $no = 1; 
                                foreach ($sponsorship as $data) {
                                    echo'
                                        <tr>
                                            <td>'.$no.'</td>
                                            <td>'.$data->tgl.'</td>
                                            <td>'.$data->no_surat.'</td>
                                            <td>'.$data->perihal.'</td>
                                            <td>'.$data->info_detil.'</td>
                                            <td>'.$data->nama_cd.'</td>
                                            <td>'.$data->catatan.'</td>
                                            <td>'.$data->institusi.'</td>
                                            <td>'.$data->nama_pic.'</td>
                                            <td>'.$data->telp_pic.'</td>
                                            <td>'.$data->no_rek.'</td>
                                            <td>'.$data->bank.'</td>
                                            <td>'.$data->jenis.'</td>
                                            <td>'.$data->tgl_pelaksanaan.'</td>
                                            <td>'.$data->biaya.'</td>
                                            <td>'.$data->lokasi.'</td>
                                            <td>'.$data->jml_audiens.'</td>
                                            <td>'.$data->kategori.'</td>
                                            <td>'.$data->nama_produk.'</td>
                                            <td>'.$data->konsep.'</td>
                                            <td>'.$data->jenis_mk.'</td>
                                            <td>'.$data->jumlah_mk.'</td>
                                            <td>'.$data->tgl_batal.'</td>
                                            <td>'.$data->alasan.'</td>
                                            <td>'.$data->tgl_dilaksanakan.'</td>
                                            <td>'.$data->btk_kegiatan.'</td>
                                            <td>'.$data->jml_dibayar.'</td>
                                            <td>'.$data->doc2finance.'</td>
                                            <td>'.$data->transfer.'</td>
                                            <td>'.$data->status.'</td>
                                            <td>'.$data->note.'</td>
                                            <td>';
                                                if ($data->status == 'DONE'){
                                                    echo '<a href="" class="btn btn-info" disabled><i class="glyphicon glyphicon-edit"></i>Done</a>';
                                                } else {
                                                    echo '<a href="'.base_url().'index.php/main/edit_sponsorship/'.$data->id_sponsorship.'" class="btn btn-info"><i class="glyphicon glyphicon-edit"></i>Done</a>';
                                                }
                                            '</td>
                                        </tr>';
                                    $no++;
                            }
                        ?>
                        </tbody>
                        <script>
                        function myFunction() {
                            if(confirm("Anda yakin ingin menghapus?"))
                            {
                                
                            } else {
                                return false;
                            }
                        }
                        </script>
                    </table>
                    <!-- /.table-responsive -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->