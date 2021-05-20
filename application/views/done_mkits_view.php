            <form method="post" action="<?php echo base_url(); ?>index.php/main/do_done_marketing_kits/<?php echo $done_mkits->id_mkits;?>" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Marketing Kits</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4><b>Add Request</b></h4>
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Nama</label>
                                                <input class="form-control" placeholder="Enter text" type="text" name="nama" id="nama" value="<?php echo $done_mkits->nama;?>" disabled>
                                            </div>
                                            <div class="form-group">
                                                <label>NIK</label>
                                                <input class="form-control" placeholder="Enter text" type="number" name="nik" id="nik" value="<?php echo $done_mkits->nik;?>" disabled>
                                            </div>
                                            <div class="form-group">
                                                <label>Nama Program</label>
                                                <input type="text" class="form-control" placeholder="Enter text" name="nm_program" id="nm_program" value="<?php echo $done_mkits->nm_program;?>" disabled>
                                            </div>
                                            <div class="form-group">
                                                <label>Tanggal</label>
                                                <input class="form-control" type="date" name="tgl" id="tgl" value="<?php echo $done_mkits->tgl;?>" disabled>
                                            </div>
                                            <div class="form-group">
                                                <label>Kebutuhan</label>
                                                <input class="form-control" placeholder="Enter text" type="text" name="kebutuhan" id="kebutuhan" value="<?php echo $done_mkits->kebutuhan;?>" disabled>
                                            </div>
                                            <div class="form-group">
                                                <label>Deskripsi</label>
                                                <div class="input-group">
                                                    <span class="input-group-addon">Meliputi (Ukuran, Bahan, Dll)</span>
                                                    <textarea class="form-control" placeholder="Enter text" name="deskripsi" id="deskripsi" value="" style="height: 150px" disabled><?php echo $done_mkits->deskripsi;?></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Jumlah</label>
                                                <input class="form-control" placeholder="Enter text" type="number" name="jumlah" id="jumlah" value="<?php echo $done_mkits->jumlah;?>" disabled>
                                            </div>
                                            <div class="form-group">
                                                <label>Timeline</label>
                                                <input type="text" class="form-control" placeholder="Enter text" name="timeline" id="timeline" value="<?php echo $done_mkits->timeline;?>" disabled>
                                            </div>
                                            <div class="form-group">
                                                <label>Status</label>
                                                <input type="text" class="form-control" placeholder="Enter text" name="status" id="status" value="<?php echo $done_mkits->status;?>" disabled>
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
                                                        <textarea class="form-control" placeholder="Write a Note" name="note" id="note" autofocus="" value="<?php echo $done_mkits->note; ?>"></textarea>
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