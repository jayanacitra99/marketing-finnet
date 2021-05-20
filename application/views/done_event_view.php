<form action="<?php echo base_url(); ?>index.php/main/do_done_event/<?php echo $done_event->id_event;?>" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Event</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4><b>Dasar Permintaan</b></h4>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Tanggal</label>
                                            <input class="form-control" type="date" name="tgl" id="tgl" value="<?php echo $done_event->tgl;?>" disabled>
                                        </div>
                                        <div class="form-group">
                                            <label>Nomer Surat</label>
                                            <input class="form-control" placeholder="Enter text" type="text" name="no_surat" id="no_surat" value="<?php echo $done_event->no_surat;?>" disabled>
                                        </div>
                                        <div class="form-group">
                                            <label>Perihal</label>
                                            <textarea class="form-control" placeholder="Enter text" name="perihal" id="perihal" value="" disabled=""><?php echo $done_event->perihal;?></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Info Detil</label>
                                            <textarea class="form-control" placeholder="Enter text" name="info_detil" id="info_detil" value="" disabled=""><?php echo $done_event->info_detil;?></textarea>
                                        </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h5><b>Catatan Deposisi Mgt/Deal dengan Partner</b></h5>
                                                </div>
                                                <div class="panel-body">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                                <div class="form-group">
                                                                    <label>Nama</label>
                                                                    <input class="form-control" placeholder="Enter text" type="text" name="nama_cd" id="nama_cd" value="<?php echo $done_event->nama_cd;?>" disabled>
                                                                </div>
                                                                <div >
                                                                    <label>Catatan</label>
                                                                    <textarea class="form-control" placeholder="Enter text" name="catatan" id="catatan" value="" disabled=""><?php echo $done_event->catatan;?></textarea>
                                                                </div>
                                                        </div>
                                                        <!-- /.col-lg-12 (nested) -->
                                                    </div>
                                                    <!-- /.row (nested) -->
                                                </div>
                                                <!-- /.panel-body -->
                                            </div>
                                            <!-- /.panel -->
                                        </div>
                                        <!-- /.col-lg-12 -->
                                    </div>
                                    <!-- /.row -->
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4><b>Nama Partner</b></h4>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Institusi</label>
                                            <input class="form-control" placeholder="Enter text" type="text" name="institusi" id="institusi" value="<?php echo $done_event->institusi;?>" disabled>
                                        </div>
                                        <div class="form-group">
                                            <label>Nama PIC</label>
                                            <input class="form-control" placeholder="Enter text" type="text" name="nama_pic" id="nama_pic" value="<?php echo $done_event->nama_pic;?>" disabled>
                                        </div>
                                        <div class="form-group">
                                            <label>Telp PIC</label>
                                            <input class="form-control" placeholder="Enter text" type="text" name="telp_pic" id="telp_pic" value="<?php echo $done_event->telp_pic;?>" disabled>
                                        </div>
                                        <div class="form-group">
                                            <label>Nomor Rekening</label>
                                            <input class="form-control" placeholder="Enter text" type="text" name="no_rek" id="no_rek" value="<?php echo $done_event->no_rek;?>" disabled>
                                        </div>
                                        <div class="form-group">
                                            <label>Bank</label>
                                            <input class="form-control" placeholder="Enter text" type="text" name="bank" id="bank" value="<?php echo $done_event->bank;?>" disabled>
                                        </div>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4><b>Jenis</b></h4>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group" name="jenis" id="jenis">
                                        <label>Jenis</label>
                                        <input class="form-control" placeholder="Enter text" type="text" name="jenis" id="jenis" value="<?php echo $done_event->jenis;?>" disabled>
                                    </div>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4><b>Tanggal Pelaksanaan</b></h4>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Tanggal</label>
                                            <div class="input-group">
                                                <input class="form-control" placeholder="Enter text" type="date" name="tgl_pelaksanaan" id="tgl_pelaksanaan" value="<?php echo $done_event->tgl_pelaksanaan;?>" disabled>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Biaya</label>
                                            <div class="input-group">
                                                <input class="form-control" placeholder="Enter text" type="text"  id="biaya" name="biaya" value="<?php echo $done_event->biaya;?>" disabled>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Lokasi</label>
                                            <input class="form-control" placeholder="Enter text" type="text" name="lokasi" id="lokasi" value="<?php echo $done_event->lokasi;?>" disabled>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                        <h5><b>Audiens</b></h5>
                                                    </div>
                                                    <div class="panel-body">
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                    <div class="form-group">
                                                                        <label>Jumlah</label>
                                                                        <div class="form-group">
                                                                            <input class="form-control" placeholder="Enter text" type="text" name="jml_audiens" id="jml_audiens" value="<?php echo $done_event->jml_audiens;?>" disabled>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label>Kategori</label>
                                                                        <div class="form-group">
                                                                            <input class="form-control" placeholder="Enter text" type="text" name="kategori" id="kategori" value="<?php echo $done_event->kategori;?>" disabled>
                                                                        </div>
                                                                    </div>
                                                            </div>
                                                            <!-- /.col-lg-12 (nested) -->
                                                        </div>
                                                        <!-- /.row (nested) -->
                                                    </div>
                                                    <!-- /.panel-body -->
                                                </div>
                                                <!-- /.panel -->
                                            </div>
                                            <!-- /.col-lg-12 -->
                                        </div>
                                        <!-- /.row -->
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                        <h5><b>Produk</b></h5>
                                                    </div>
                                                    <div class="panel-body">
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                    <div class="form-group">
                                                                        <label>Nama</label>
                                                                        <div class="form-group">
                                                                            <input class="form-control" placeholder="Enter text" type="text" name="nama_produk" id="nama_produk" value="<?php echo $done_event->nama_produk;?>" disabled>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label>Konsep</label>
                                                                        <div class="form-group">
                                                                            <input class="form-control" placeholder="Enter text" type="text" name="konsep" id="Konsep" value="<?php echo $done_event->konsep;?>" disabled>
                                                                        </div>
                                                                    </div>
                                                            </div>
                                                            <!-- /.col-lg-12 (nested) -->
                                                        </div>
                                                        <!-- /.row (nested) -->
                                                    </div>
                                                    <!-- /.panel-body -->
                                                </div>
                                                <!-- /.panel -->
                                            </div>
                                            <!-- /.col-lg-12 -->
                                        </div>
                                        <!-- /.row -->
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                        <h5><b>Marketing Kits</b></h5>
                                                    </div>
                                                    <div class="panel-body">
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                    <div class="form-group">
                                                                        <label>Jenis</label>
                                                                        <div class="form-group">
                                                                            <input class="form-control" placeholder="Enter text" type="text" name="jenis_mk" id="jenis_mk" value="<?php echo $done_event->jenis_mk;?>" disabled>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label>Jumlah</label>
                                                                        <div class="form-group">
                                                                            <input class="form-control" placeholder="Enter text" type="text" name="jumlah_mk" id="jumlah_mk" value="<?php echo $done_event->jumlah_mk;?>" disabled>
                                                                        </div>
                                                                    </div>
                                                            </div>
                                                            <!-- /.col-lg-12 (nested) -->
                                                        </div>
                                                        <!-- /.row (nested) -->
                                                    </div>
                                                    <!-- /.panel-body -->
                                                </div>
                                                <!-- /.panel -->
                                            </div>
                                            <!-- /.col-lg-12 -->
                                        </div>
                                        <!-- /.row -->
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4><b>Status Pelaksanaan</b></h4>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="panel panel-default ">
                                                <div class="panel-heading">
                                                    <h5><b>Batal</b></h5>
                                                </div>
                                                <div class="panel-body">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                                <div class="form-group">
                                                                    <label>Tanggal</label>
                                                                    <input class="form-control" placeholder="Enter text" type="date" name="tgl_batal" id="tgl_batal" value="<?php echo $done_event->tgl_batal;?>" disabled>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Alasan</label>
                                                                    <textarea class="form-control" placeholder="Enter text" name="alasan" id="alasan" value="" disabled=""><?php echo $done_event->alasan;?></textarea>
                                                                </div>
                                                        </div>
                                                        <!-- /.col-lg- (nested) -->
                                                    </div>
                                                    <!-- /.row (nested) -->
                                                </div>
                                                <!-- /.panel-body -->
                                            </div>
                                            <!-- /.panel -->
                                        </div>
                                        <!-- /.col-lg-12 -->
                                    </div>
                                    <!-- /.row -->
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="panel panel-default ">
                                                <div class="panel-heading">
                                                    <h5><b>Dilaksanakan</b></h5>
                                                </div>
                                                <div class="panel-body">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                                <div class="form-group">
                                                                    <label>Tanggal</label>
                                                                    <input class="form-control" placeholder="Enter text" type="date" name="tgl_dilaksanakan" id="tgl_dilaksanakan" value="<?php echo $done_event->tgl_dilaksanakan;?>" disabled>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Bentuk Kegiatan</label>
                                                                    <textarea class="form-control" placeholder="Enter text" name="btk_kegiatan" id="btk_kegiatan" value="" disabled=""><?php echo $done_event->btk_kegiatan;?></textarea>
                                                                </div>
                                                        </div>
                                                        <!-- /.col-lg-6 (nested) -->
                                                    </div>
                                                    <!-- /.row (nested) -->
                                                </div>
                                                <!-- /.panel-body -->
                                            </div>
                                            <!-- /.panel -->
                                        </div>
                                        <!-- /.col-lg-12 -->
                                    </div>
                                    <!-- /.row -->
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4><b>Status Pembayaran</b></h4>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Jumlah Dibayar</label>
                                            <div class="input-group">
                                                <span class="input-group-addon">Rp.</span>
                                                <input class="form-control" placeholder="Enter text" type="text" name="jml_dibayar" id="jml_dibayar" value="<?php echo $done_event->jml_dibayar;?>" disabled>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Tanggal</label>
                                            <div class="input-group">
                                                <span class="input-group-addon"><i style="width: 100pt;" class="fa">Document ke Finance</i></span>
                                                <input class="form-control" placeholder="Enter text" type="date" name="doc2finance" id="doc2finance" value="<?php echo $done_event->doc2finance;?>" disabled>
                                            </div>
                                            <br>
                                            <div class="input-group">
                                                <span class="input-group-addon"><i style="width: 100pt;" class="fa">Transfer</i></span>
                                                <input class="form-control" placeholder="Enter text" type="date" name="transfer" id="transfer" value="<?php echo $done_event->transfer;?>" disabled>
                                            </div>
                                        </div>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->            
            
                <a href="" class="btn btn-info" data-toggle="modal" data-target=".login-register-form"><i class="glyphicon glyphicon-edit"></i>Done</a>';
                <div class="modal fade login-register-form" role="dialog" style="font-size: 20px">
                          <div class="modal-dialog modal-sm">
                              <div class="modal-content">
                                  <div class="modal-header" style="color: #fed136; background-color: #222" >
                                      <center>DONE
                                      <button type="button" class="close" data-dismiss="modal">
                                          <span class="glyphicon glyphicon-remove" style="color: white"></span>
                                      </button>
                                      </center>
                                  </div>
                                  <div class="modal-body" >
                                      <div class="tab-content" >
                                          <div id="login-form" >
                                                <fieldset>
                                                    <div class="form-group">
                                                        <textarea class="form-control" placeholder="Write a Note" name="note" id="note" autofocus="" value="<?php echo $done_event->note; ?>"></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                    <input type="submit" class="btn btn-md btn-success btn-block" value="DONE" name="submit">
                                                    </div>
                                                </fieldset>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
            </form>
            <br>
            <br>
