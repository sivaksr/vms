<?php include("header.php"); ?>

<div class="content-wrapper">
    <div class="container">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Advertise
            </h1>
            <ol class="breadcrumb">
                <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
                <li>Advertisment</li>
                <li class="active">Driver</li>
            </ol>
        </section>

        <section class="content">
            <div class="box box-danger">
                <div class="box-body">
                    <div class="row">
                        <div class="col-md-12">
                            <form role="form">
                                <div class="row">
                                    <div class="col-md-3"></div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Subject</label>
                                            <input type=" text" class="form-control " name="subject" placeholder="Subject :">
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Message</label>
                                            <textarea class="form-control" name="message" placeholder="Enter here.."></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Date</label>
                                            <input type="date" class="form-control " name="date" placeholder="">
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Time</label>
                                            <input type="time" class="form-control" name="time" placeholder="">
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Image</label>
                                            <input type="file" class="form-control" name="image" placeholder="">
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">No.of times per day</label>
                                            <input type="text" class="form-control" name="image" placeholder="Enter">
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <ul class="list-inline text-center">
                                    <li><button type="button" class="btn btn-primary next-step">Submit</button></li>
                                </ul>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /.content -->
        <div class="p-5"></div>
    </div>
</div>
<!-- /.content-wrapper -->

<?php include("footer.php"); ?>