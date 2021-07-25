<?php
    include('historicalTables.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Historical Tours Webpage</title>

    <!-- Custom fonts for this template -->
    <link href="external/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/appTemp.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="external/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">
<script>
    function sendForm() {
        const hForm = document.getElementById('histForm');
        const hName = hForm.elements['histName'];
        const hLoc = hForm.elements['histLocation'];
        const hDate = hForm.elements['histDate'];

        let formName = hName.value;
        let formLoc = hLoc.value;
        let formDate = hDate.value;

        console.log(formName);
        console.log(formLoc);
        console.log(formDate);

        $.ajax({
            type: "POST",
            url: 'addDestination.php',
            data: {dest_name: formName, dest_loc: formLoc, dest_date: formDate},
            success: function(response) {
                console.log(response);
            }
        });
    }
</script>
<br>
<br>
<h1 class = "m-0 font-weight-bold" style = "text-align: center; color:#000000"> Historical Tours</h1>
<hr>
<br>
<br>

<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Begin Page Content -->
            <pre id="output" class="text-secondary"></pre>
            <div class="container-fluid">
                <div class="uploadError">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h4 class="m-0 font-weight-bold" style="color: #005C5C">Enter Attraction</h4>
                        </div>
                        <div class="card-body">
                            <form onsubmit="sendForm()" method="post" id="histForm" style="align-self: center">
                                Name: <input type="text" id="histName">
                                Location: <input type="text" id="histLocation">
                                Date: <input type="text" id="histDate">
                                <input type="submit">
                            </form>
                        </div>
                    </div>
                </div>

                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h4 class="m-0 font-weight-bold" style="color: #005C5C">Database</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="hTable" width="100%" cellspacing="0">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Location</th>
                                    <th>Date</th>
                                </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

    </div>
    <!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>



<!-- Bootstrap core JavaScript-->
<script src="external/jquery/jquery.min.js"></script>
<script src="external/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="external/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="js/appTemp.min.js"></script>

<!-- Page level plugins -->
<script src="external/datatables/jquery.dataTables.min.js"></script>
<script src="external/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<script src="js/demo/tableLister.js"></script>


</body>

</html>