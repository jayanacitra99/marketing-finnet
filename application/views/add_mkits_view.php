
            <form method="post" action="<?php echo base_url();?>index.php/main/new_marketing_kits" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Marketing Kits - Add New Request </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="row">
                        <div class="col-lg-12">
                            <a href="<?php echo base_url();?>index.php/main/marketing_kits" class="btn btn-primary"><i class="fa fa-table fa-fw"></i>View Marketing Kits</a>
                            <br>
                            <br>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4><b>Add Request</b></h4>
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Nama</label>
                                                <input class="form-control" placeholder="Enter text" type="text" name="nama" id="nama" value="">
                                            </div>
                                            <div class="form-group">
                                                <label>NIK</label>
                                                <input class="form-control" placeholder="Enter text" type="number" name="nik" id="nik" value="">
                                            </div>
                                            <div class="form-group">
                                                <label>Nama Program</label>
                                                <input type="text" class="form-control" placeholder="Enter text" name="nm_program" id="nm_program" value="">
                                            </div>
                                            <div class="form-group">
                                                <label>Tanggal</label>
                                                <input class="form-control" type="date" name="tgl" id="tgl" value="">
                                            </div>
                                            <div class="form-group">
                                                <label>Kebutuhan</label>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" value="Desain," name="desain" id="desain"> Desain
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" value="Cetak Flyer/Banner," name="cetak" id="cetak">Cetak Flyer / Banner
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" value="Souvenir," name="souvenir" id="souvenir"> Souvenir
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" value="Program Marketing," name="prg_marketing" id="prg_marketing"> Program Marketing
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" value="Exhibition," name="exhibition" id="exhibition"> Exhibition
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" value="Input Data," name="input_data" id="input_data"> Input Data
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Deskripsi</label>
                                                <div class="input-group">
                                                    <span class="input-group-addon">Meliputi (Ukuran, Bahan, Dll)</span>
                                                    <textarea class="form-control" placeholder="Enter text" name="deskripsi" id="deskripsi" value="" style="height: 150px"></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Jumlah</label>
                                                <input class="form-control" placeholder="Enter text" type="number" name="jumlah" id="jumlah" value="">
                                            </div>
                                            <div class="form-group">
                                                <label>Timeline</label>
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
                <input type="submit" name="submit" class="btn btn-primary" value="SEND">
            </form>
            <br>
            <br>