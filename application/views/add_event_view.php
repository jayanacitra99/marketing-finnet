
            <form method="post" action="<?php echo base_url();?>index.php/main/new_event">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Event - New Event</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <a href="<?php echo base_url();?>index.php/main/event" class="btn btn-primary"><i class="fa fa-table fa-fw"></i>View Event</a>
                    <br>
                    <br>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4><b>Dasar Permintaan</b></h4>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Tanggal</label>
                                            <input class="form-control" type="date" name="tgl" id="tgl" value="">
                                        </div>
                                        <div class="form-group">
                                            <label>Nomer Surat</label>
                                            <input class="form-control" placeholder="Enter text" type="number" name="no_surat" id="no_surat" value="">
                                        </div>
                                        <div class="form-group">
                                            <label>Perihal</label>
                                            <textarea class="form-control" placeholder="Enter text" name="perihal" id="perihal" value=""></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Info Detil</label>
                                            <textarea class="form-control" placeholder="Enter text" name="info_detil" id="info_detil" value=""></textarea>
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
                                                                    <input class="form-control" placeholder="Enter text" type="text" name="nama_cd" id="nama_cd" value="">
                                                                </div>
                                                                <div >
                                                                    <label>Catatan</label>
                                                                    <textarea class="form-control" placeholder="Enter text" name="catatan" id="catatan" value=""></textarea>
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
                                            <input class="form-control" placeholder="Enter text" type="text" name="institusi" id="institusi" value="">
                                        </div>
                                        <div class="form-group">
                                            <label>Nama PIC</label>
                                            <input class="form-control" placeholder="Enter text" type="text" name="nama_pic" id="nama_pic" value="">
                                        </div>
                                        <div class="form-group">
                                            <label>Telp PIC</label>
                                            <input class="form-control" placeholder="Enter text" type="number" name="telp_pic" id="telp_pic" value="">
                                        </div>
                                        <div class="form-group">
                                            <label>Nomor Rekening</label>
                                            <input class="form-control" placeholder="Enter text" type="number" name="no_rek" id="no_rek" value="">
                                        </div>
                                        <div class="form-group">
                                            <label>Bank</label>
                                            <input class="form-control" placeholder="Enter text" type="text" name="bank" id="bank" value="">
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
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" value="Sponsorship" name="sponsorship_j" id="sponsorship_j">Sponsorship
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" value="Event" name="event_j" id="event_j">Event
                                            </label>
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
                                                <span class="input-group-addon">Tanggal Mulai</span>
                                                <input class="form-control" placeholder="Enter text" type="date" name="tgl_mulai" id="tgl_mulai" value="">
                                            </div>
                                            <center><h5>s/d</h5></center>
                                            <div class="input-group">
                                                <span class="input-group-addon">Tanggal Akhir</span>
                                                <input class="form-control" placeholder="Enter text" type="date" name="tgl_akhir" id="tgl_akhir" value="">
                                            </div>
                                        </div>
                                        <div class="form-group" id="biaya" name="biaya">
                                            <label>Biaya</label>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="Sponsorship" name="sponsorship_b" id="sponsorship_b">Sponsorship
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="Event" name="event_b" id="event_b">Event
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Lokasi</label>
                                            <input class="form-control" placeholder="Enter text" type="text" name="lokasi" id="lokasi" value="">
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
                                                                            <input class="form-control" placeholder="Enter text" type="number" name="jml_audiens" id="jml_audiens" value="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label>Kategori</label>
                                                                        <select class="form-control" name="kategori" id="kategori">
                                                                            <option>--CHOOSE ONE--</option>
                                                                            <option value="Orangtua/Alumni">Orang Tua / Alumni</option>
                                                                            <option value="Siswa">Siswa</option>
                                                                            <option value="Orangtua">Orang Tua</option>
                                                                            <option value="Alumni">Alumni</option>
                                                                        </select>
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
                                                                            <input class="form-control" placeholder="Enter text" type="text" name="nama_produk" id="nama_produk" value="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label>Konsep</label>
                                                                        <div class="form-group">
                                                                            <input class="form-control" placeholder="Enter text" type="text" name="konsep" id="Konsep" value="">
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
                                                                            <input class="form-control" placeholder="Enter text" type="text" name="jenis_mk" id="jenis_mk" value="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label>Jumlah</label>
                                                                        <div class="form-group">
                                                                            <input class="form-control" placeholder="Enter text" type="number" name="jumlah_mk" id="jumlah_mk" value="">
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
                                                                    <input class="form-control" placeholder="Enter text" type="date" name="tgl_batal" id="tgl_batal" value="">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Alasan</label>
                                                                    <textarea class="form-control" placeholder="Enter text" name="alasan" id="alasan" value=""></textarea>
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
                                                                    <input class="form-control" placeholder="Enter text" type="date" name="tgl_dilaksanakan" id="tgl_dilaksanakan" value="">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Bentuk Kegiatan</label>
                                                                    <textarea class="form-control" placeholder="Enter text" name="btk_kegiatan" id="btk_kegiatan" value=""></textarea>
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
                                                <input class="form-control" placeholder="Enter text" type="number" name="jml_dibayar" id="jml_dibayar" value="">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Tanggal</label>
                                            <div class="input-group">
                                                <span class="input-group-addon"><i style="width: 100pt;" class="fa">Document ke Finance</i></span>
                                                <input class="form-control" placeholder="Enter text" type="date" name="doc2finance" id="doc2finance" value="">
                                            </div>
                                            <br>
                                            <div class="input-group">
                                                <span class="input-group-addon"><i style="width: 100pt;" class="fa">Transfer</i></span>
                                                <input class="form-control" placeholder="Enter text" type="date" name="transfer" id="transfer" value="">
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
            
                <input type="submit" name="submit" class="btn btn-primary" value="SEND">
            </form>
            <br>
            <br>