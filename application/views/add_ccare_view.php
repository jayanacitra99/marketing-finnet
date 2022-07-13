
            <form method="post" action="<?php echo base_url();?>index.php/main/new_customer_care" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Customer Care - Add New </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="row">
                        <div class="col-lg-12">
                            <a href="<?php echo base_url();?>index.php/main/customer_care" class="btn btn-primary"><i class="fa fa-table fa-fw"></i>View Customer Care</a>
                            <br>
                            <br>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4><b>Add Customer Care</b></h4>
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Tanggal</label>
                                                <input class="form-control" placeholder="Enter text" type="date" name="tanggal" id="tanggal" value="" required="">
                                            </div>
                                            <div class="form-group">
                                                <label>Agenda</label>
                                                <input class="form-control" placeholder="Enter text" type="text" name="agenda" id="agenda" value="" required="">
                                            </div>
                                            <div class="form-group">
                                                <label>Nama Program</label>
                                                <input type="text" class="form-control" placeholder="Enter text" name="nm_program" id="nm_program" value="" required="">
                                            </div>
                                            <div class="form-group">
                                                <label>Pictures</label>
                                                <input class="form-control" type="file" name="foto" id="foto" required="" accept=".jpg,.png">
                                            </div>
                                            <div class="form-group">
                                                <label>Divisi</label>
                                                <input type="text" class="form-control" placeholder="Enter text" name="divisi" id="divisi" value="" required="">
                                            </div>
                                            <div class="form-group">
                                                <label>Jam</label>
                                                <input type="time" class="form-control" placeholder="Enter text" name="jam" id="jam" value="" required="">
                                            </div>
                                            <div class="form-group">
                                                <label>Penjelasan Produk Sekilas</label>
                                                <textarea class="form-control" placeholder="Write a Note" name="p_produk" id="p_produk" value="" required=""></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label>Tempat Sosialisasi</label>
                                                <input type="text" class="form-control" placeholder="Enter text" name="tempat" id="tempat" value="" required="">
                                            </div>
                                            <div class="form-group">
                                                <label>Nama Tools Pengecekan</label>
                                                <input type="text" class="form-control" placeholder="Enter text" name="nm_tools" id="nm_tools" value="" required="">
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