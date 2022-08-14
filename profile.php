<!DOCTYPE html>
<html lang="en">

<head>


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CLOUD ARM</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="../plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="../plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="../plugins/summernote/summernote-bs4.min.css">

    <!-- Select2 -->
    <link rel="stylesheet" href="../plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="../plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">

    <link rel="stylesheet" href="../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <!-- dropzonejs -->
    <link rel="stylesheet" href="../../plugins/dropzone/min/dropzone.min.css">


</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->

        <?php  include("hed.php"); ?>
        <?php  include("sidebar.php"); ?>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Profile</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Customer Profile</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>



            <?php 
    $id=$_GET['id'];


    $city_id=0;
    $province_id=0;
    $district_id=0;

    $stmt = $db->query("SELECT * FROM customer WHERE id='$id'");
    while ($row = $stmt->fetch())
    {
      $name=$row['name'];
      $contact=$row['contact'];
      $abut=$row['about'];
      $land_size1=$row['land_size1'];
      $amount1=$row['amount_rf'];
      $referral=$row['referral'];

      $plan_no=$row['plan_no'];
      $land_name=$row['land_name'];
      $land_size=$row['land_size'];
      $village=$row['village'];
      $city=$row['city'];
      $province=$row['province'];
      $district=$row['district'];
      $issu_date=$row['issu_date'];
      $serveye_date=$row['serveye_date'];
      $old_plan_no=$row['old_plan_no'];
      $old_is=$row['old_is'];

      $city_id=$row['city_id'];
      $province_id=$row['province_id'];
      $district_id=$row['district_id'];

      $pdf=$row['plan_pdf'];

     }
    ?>



            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-3">

                            <!-- Profile Image -->
                            <div class="card card-primary card-outline">
                                <div class="card-body box-profile">
                                    <div class="text-center">
                                    </div>

                                    <h3 class="profile-username text-center"><?php echo $name; ?></h3>

                                    <ul class="list-group list-group-unbordered mb-3">
                                        <li class="list-group-item">
                                            <b>Land Size</b> <a class="float-right"><?php echo $land_size1; ?>P</a>
                                        </li>
                                        <li class="list-group-item">
                                            <b>Amount</b> <a class="float-right">Rs. <?php echo $amount1; ?></a>
                                        </li>
                                        <li class="list-group-item">
                                            <b>Contact NO</b> <a class="float-right"><?php echo $contact; ?></a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->

                            <!-- About Me Box -->
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">About JOB</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <strong><i class="fas fa-book mr-1"></i>About Of Work</strong>

                                    <p class="text-muted">
                                        <?php echo $abut; ?>
                                    </p>

                                    <hr>

                                    <strong><i class="fas fa-map-marker-alt mr-1"></i>Referral</strong>

                                    <p class="text-muted"><?php  $stmt = $db->query("SELECT * FROM referral WHERE id='$referral'");
                                    while ($row = $stmt->fetch())
                                    { echo $row['name']; }?></p>

                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->

                        </div>
                        <!-- /.col -->
                        <div class="col-md-9">
                            <div class="card">
                                <div class="card-header p-2">
                                    <ul class="nav nav-pills">
                                        <li class="nav-item"><a class="nav-link active" href="#activity"
                                                data-toggle="tab">Activity</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#plan" data-toggle="tab">PDF</a>
                                        </li>
                                        <li class="nav-item"><a class="nav-link" href="#settings"
                                                data-toggle="tab">Settings</a></li>
                                    </ul>
                                </div><!-- /.card-header -->
                                <div class="card-body">
                                    <div class="tab-content">
                                        <div class="active tab-pane" id="activity">
                                            <!-- Post -->
                                            <div class="post">
                                                <div class="row">
                                                    <div class="col-md-3 col-sm-6 col-12">
                                                        <div class="info-box shadow-lg">
                                                            <span class="info-box-icon bg-danger"><i
                                                                    class="far fa-file-powerpoint"></i></span>

                                                            <div class="info-box-content">
                                                                <span class="info-box-text">Plan NO</span>
                                                                <span class="info-box-number">
                                                                    <h3><?php echo $plan_no; ?></h3>
                                                                </span>
                                                            </div>
                                                            <!-- /.info-box-content -->
                                                        </div>
                                                        <!-- /.info-box -->
                                                    </div>
                                                    <div class="col-md-5 col-sm-6 col-12">
                                                        <div class="info-box shadow-lg">
                                                            <span class="info-box-icon bg-success"><i
                                                                    class="far fa-map"></i></span>

                                                            <div class="info-box-content">
                                                                <span class="info-box-text">Land Name</span>
                                                                <span class="info-box-number">
                                                                    <h4><?php echo $land_name; ?></h4>
                                                                </span>
                                                            </div>
                                                            <!-- /.info-box-content -->
                                                        </div>
                                                        <!-- /.info-box -->
                                                    </div>
                                                    <div class="col-md-4 col-sm-6 col-12">
                                                        <div class="info-box shadow-lg">
                                                            <span class="info-box-icon bg-primary"><i
                                                                    class="far  fa-object-ungroup"></i></span>

                                                            <div class="info-box-content">
                                                                <span class="info-box-text">Actual size of Land</span>
                                                                <span class="info-box-number">
                                                                    <h3><?php echo $land_size; ?>p</h3>
                                                                </span>
                                                            </div>
                                                            <!-- /.info-box-content -->
                                                        </div>
                                                        <!-- /.info-box -->
                                                    </div>


                                                </div>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <div class="card card-warning shadow">
                                                            <div class="card-header">
                                                                <h3 class="card-title">Plan Details</h3>
                                                                <div class="card-tools">
                                                                    <button type="button" class="btn btn-tool"
                                                                        data-card-widget="remove"><i
                                                                            class="fas fa-times"></i>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                            <div class="card-body">
                                                                <h5>Issu Date: <b><?php echo $issu_date; ?></b></h5>
                                                                <h5>Serveye Date: <b><?php echo $serveye_date; ?></b>
                                                                </h5>
                                                                <h5>Previous Plan No: <b><?php echo $old_plan_no; ?></b>
                                                                </h5>
                                                                <h5>Previous I.S: <b><?php echo $old_is; ?></b></h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <div class="card card-info shadow">
                                                            <div class="card-header">
                                                                <h3 class="card-title">Location Details</h3>
                                                                <div class="card-tools">
                                                                    <button type="button" class="btn btn-tool"
                                                                        data-card-widget="remove"><i
                                                                            class="fas fa-times"></i>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                            <div class="card-body">
                                                                <h5>Village: <b><?php echo $village; ?></b></h5>
                                                                <h5>City: <b><?php echo $city; ?></b></h5>
                                                                <h5>District: <b><?php echo $district; ?></b></h5>
                                                                <h5>Province: <b><?php echo $province; ?></b></h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                        <div class=" tab-pane" id="plan">
                                            <!-- Post -->
                                            <div class="post">
                                                <?php if($pdf==""){ ?>
                                                <div class="col-lg-4">
                                                    <div class="btn-group w-100">
                                                    <form  action="save/save_pdf.php" method="post" enctype="multipart/form-data">
                                                        <input type="hidden" name="id" value="<?php echo $id ?>">
                                                        <span  class="btn btn-success col fileinput-button">
                                                            
                                                            <input type="file" class="btn btn-success col fileinput-button"name="pdf_file" id="">
                                                        </span> 
                                                        <button type="submit" class="btn btn-primary col start">
                                                            <i class="fas fa-upload"></i>
                                                            <span>Start upload</span>
                                                        </button>
                                                        </form>
                                                    </div>
                                                </div>
                                                <?php }else{ ?>
                                                <iframe src="pdf/<?php echo $pdf; ?>" frameBorder="0" scrolling="auto"
                                                    height="900px" width="100%">
                                                </iframe>
                                                <?php } ?>
                                            </div>
                                        </div>

                                        <div class="tab-pane" id="settings">
                                            <form action="save/update_customer.php" method="post">
                                                <input type="hidden" value="<?php echo $id ?>" name="id">
                                                <form class="form-horizontal">
                                                    <div class="form-group row">
                                                        <label for="inputName" class="col-sm-2 col-form-label">Plan
                                                            No</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" value="<?php echo $plan_no; ?>"
                                                                class="form-control" id="inputName" name="plan_no"
                                                                autocomplete="off">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="inputEmail" class="col-sm-3 col-form-label">Actual
                                                            size of land</label>
                                                        <div class="col-sm-9">
                                                            <input type="number" value="<?php echo $land_size; ?>"
                                                                class="form-control" id="inputEmail" name="size"
                                                                autocomplete="off">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="inputName2" class="col-sm-2 col-form-label">Name Of
                                                            Land</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" value="<?php echo $land_name; ?>"
                                                                class="form-control" id="inputName2" name="land_name"
                                                                autocomplete="off">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="inputExperience"
                                                            class="col-sm-2 col-form-label">Plan issu date </label>
                                                        <div class="col-sm-5">
                                                            <input type="text" value="<?php echo $issu_date; ?>"
                                                                class="form-control" id="inputName2" name="issu_date"
                                                                data-inputmask="'mask': ['2099-99-99']" data-mask
                                                                autocomplete="off">
                                                        </div>
                                                        <div class="col-sm-5">
                                                            <p style="color:darkred">(YYYY-MM-DD)</p>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="inputName2" class="col-sm-2 col-form-label">Surveyed
                                                            date</label>
                                                        <div class="col-sm-5">
                                                            <input type="text" value="<?php echo $serveye_date; ?>"
                                                                class="form-control" id="inputName2" name="serveye_date"
                                                                data-inputmask="'mask': ['2099-99-99']" data-mask
                                                                autocomplete="off">
                                                        </div>
                                                        <div class="col-sm-5">
                                                            <p style="color:darkred">(YYYY-MM-DD)</p>
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label for="inputSkills"
                                                            class="col-sm-2 col-form-label">Province</label>
                                                        <div class="col-sm-10">
                                                            <select name="province" id="" class="form-control"
                                                                id="inputSkills">
                                                                <option value="<?php echo $province_id; ?>">
                                                                    <?php echo $province; ?></option>
                                                                <?php     $stmt = $db->query("SELECT * FROM provinces");
                                                          while ($row = $stmt->fetch())
                                                          { echo "<option value=".$row['id'].">".$row['name_en']."-".$row['name_si']."</option>"; }  ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="inputSkills"
                                                            class="col-sm-2 col-form-label">District</label>
                                                        <div class="col-sm-10">
                                                            <select name="district" id="" class="form-control"
                                                                id="inputSkills">
                                                                <option value="<?php echo $district_id; ?>">
                                                                    <?php echo $district; ?></option>
                                                                <?php   
                                                                $stmt = $db->query("SELECT * FROM districts");
                                                                while ($row = $stmt->fetch())
                                                                { echo "<option value=".$row['id'].">".$row['name_en']."-".$row['name_si']."</option>"; } ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="inputSkills"
                                                            class="col-sm-2 col-form-label">City</label>
                                                        <div class="col-sm-10">
                                                            <select name="city" id="" class="form-control"
                                                                id="inputSkills">
                                                                <option value="<?php echo $city_id; ?>">
                                                                    <?php echo $city; ?></option>
                                                                <?php $stmt = $db->query("SELECT * FROM cities");
                                                          while ($row = $stmt->fetch())
                                                          { echo "<option value=".$row['id'].">".$row['name_en']."-".$row['name_si']."</option>"; } ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="inputName2"
                                                            class="col-sm-2 col-form-label">Village</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" value="<?php echo $village; ?>"
                                                                class="form-control" id="inputName2" name="village"
                                                                autocomplete="off">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="inputSkills"
                                                            class="col-sm-3 col-form-label">Previous Plan NO</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" value="<?php echo $old_plan_no; ?>"
                                                                class="form-control" id="inputName2" name="old_plan_no"
                                                                autocomplete="off">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="inputSkills"
                                                            class="col-sm-3 col-form-label">Previous I.S Name</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" value="<?php echo $old_is; ?>"
                                                                class="form-control" id="inputName2" name="old_is"
                                                                autocomplete="off">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="offset-sm-2 col-sm-10">
                                                            <button type="submit" class="btn btn-danger">Submit</button>
                                                </form>


                                        </div>
                                    </div>
                                    </form>
                                </div>
                                <!-- /.tab-pane -->
                            </div>
                            <!-- /.tab-content -->
                        </div><!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <?php include("footer.php"); ?>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
    </div>
    <script src="../plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="../plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
    $.widget.bridge('uibutton', $.ui.button)
    </script>


    <script src="../plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="../plugins/jszip/jszip.min.js"></script>
    <script src="../plugins/pdfmake/pdfmake.min.js"></script>
    <script src="../plugins/pdfmake/vfs_fonts.js"></script>
    <script src="../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="../plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>


    <!-- Bootstrap 4 -->
    <script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="../plugins/select2/js/select2.full.min.js"></script>

    <!-- Bootstrap4 Duallistbox -->
    <script src="../../plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>

    <!-- Sparkline -->
    <script src="../plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="../plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="../plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="../plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="../plugins/moment/moment.min.js"></script>
    <script src="../plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="../plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../dist/js/adminlte.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../dist/js/demo.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="../dist/js/pages/dashboard.js"></script>
    <!-- dropzonejs -->
    <script src="../../plugins/dropzone/min/dropzone.min.js"></script>

    <!-- InputMask -->
    <script src="../plugins/moment/moment.min.js"></script>
    <script src="../plugins/inputmask/jquery.inputmask.min.js"></script>

    <script>
    $(function() {
        $('[data-mask]').inputmask()
        $('.select2').select2()

        $('.select2bs4').select2({
            theme: 'bootstrap4'
        })


        $("#example1").DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
            "buttons": ["excel", "pdf", "print"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
    });

    $(function() {
        var Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000
        });
    });
    // DropzoneJS Demo Code Start
    Dropzone.autoDiscover = false

    // Get the template HTML and remove it from the doumenthe template HTML and remove it from the doument
    var previewNode = document.querySelector("#template")
    previewNode.id = ""
    var previewTemplate = previewNode.parentNode.innerHTML
    previewNode.parentNode.removeChild(previewNode)

    var myDropzone = new Dropzone(document.body, { // Make the whole body a dropzone
        url: "/target-url", // Set the url
        thumbnailWidth: 80,
        thumbnailHeight: 80,
        parallelUploads: 20,
        previewTemplate: previewTemplate,
        autoQueue: false, // Make sure the files aren't queued until manually added
        previewsContainer: "#previews", // Define the container to display the previews
        clickable: ".fileinput-button" // Define the element that should be used as click trigger to select files.
    })

    myDropzone.on("addedfile", function(file) {
        // Hookup the start button
        file.previewElement.querySelector(".start").onclick = function() {
            myDropzone.enqueueFile(file)
        }
    })

    // Update the total progress bar
    myDropzone.on("totaluploadprogress", function(progress) {
        document.querySelector("#total-progress .progress-bar").style.width = progress + "%"
    })

    myDropzone.on("sending", function(file) {
        // Show the total progress bar when upload starts
        document.querySelector("#total-progress").style.opacity = "1"
        // And disable the start button
        file.previewElement.querySelector(".start").setAttribute("disabled", "disabled")
    })

    // Hide the total progress bar when nothing's uploading anymore
    myDropzone.on("queuecomplete", function(progress) {
        document.querySelector("#total-progress").style.opacity = "0"
    })

    // Setup the buttons for all transfers
    // The "add files" button doesn't need to be setup because the config
    // `clickable` has already been specified.
    document.querySelector("#actions .start").onclick = function() {
        myDropzone.enqueueFiles(myDropzone.getFilesWithStatus(Dropzone.ADDED))
    }
    document.querySelector("#actions .cancel").onclick = function() {
        myDropzone.removeAllFiles(true)
    }
    // DropzoneJS Demo Code End
    </script>


</body>

</html>