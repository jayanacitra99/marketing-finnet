
    
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Sign Up</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" action="<?php echo base_url();?>index.php/main/sign_up" method="post" onSubmit="return validate();" enctype="multipart/form-data">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Name" name="name" type="text" autofocus value="" required="">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Username" name="username" id="username" type="text" value="" required="">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="" required="">
                                </div>
                                <div class="form-group">
                                    <div class="radioo">
                                        <input type="radio" name="status" value="admin"> Admin
                                    </div>
                                    <div class="radioo">
                                        <input type="radio" name="status" value="assistant_manager"> Assistant Manager
                                    </div>
                                    <div class="radioo">
                                        <input type="radio" name="status" value="vice_president"> Vice President
                                    </div>
                                    <div class="radioo">
                                        <input type="radio" name="status" value="manager"> Manager
                                    </div>
                                    <div class="radioo">
                                        <input type="radio" name="status" value="officer"> Officer
                                    </div>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <input type="submit" name="submit" class="btn btn-lg btn-success btn-block" value="Sign Up">
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-wrapper -->