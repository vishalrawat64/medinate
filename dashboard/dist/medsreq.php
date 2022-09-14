<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Donate Medicine</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="../icofont/icofont.min.css">


</head>

<body>

    <div id="wrapper">

        <?php include 'medsnav.php' ?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Add Medicine Details</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Please fill up the form below:
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" action="addedreqmeds.php" method="post">
                                        <h1 class="heading1">ADD REQUIRED DRUG DETAILS</h1>
                                        <div class="form-group">
                                            <label>Drug Name</label>
                                            <input class="form-control" type="text" placeholder="Dolo-650" id="drugname" name="drugname" required>
                                        </div>

                                        <div class="form-group">
                                            <label>National Drug Code(NDC)</label>
                                            <input class="form-control" type="text" placeholder="0777310502" id="ndc" name="ndc" required>
                                        </div>

                                        <div class="form-group">
                                            <label>Expiration Date(Atleast 1 year left)
                                            </label>
                                            <input class="form-control" type="date" id="expirationdate" name="expirationdate" required>
                                        </div>

                                        <div class="form-group">
                                            <label>Quantity</label>
                                            <input class="form-control" placeholder="10" type="text" id="quantity" name="quantity" required>
                                        </div>

                                        <button type="submit" class="btn btn-success">Submit</button>
                                    </form>
                                </div>

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
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>


<style>
    footer {
        background-color: #424558;
        bottom: 0;
        left: 0;
        right: 0;
        height: 35px;
        text-align: center;
        color: #CCC;
    }

    footer p {
        padding: 10.5px;
        margin: 0px;
        line-height: 100%;
    }

    .heading1 {
        font-size: 40px;
        font-weight: 600;
        text-align: center;
        font-family: 'Poppins', sans-serif;
    }

    label {
        display: inline-block;
        width: 340px;
        font-size: 1.3rem;
        padding-top: 22px;
        padding-left: 110px;
    }

    input[type=text] {
        color: black;
        background: transparent;
        width: 18%;
        padding: 12px 15px;
        margin: 5px 10px;
        font-size: 20px;
        border: none;
        outline: none;
        border-bottom: 2px solid rgb(185, 185, 185);

    }

    input[type=text]:focus {
        box-shadow: 3px 10px 10px 0 rgba(0, 0, 0, 0.2);
        border: 2px solid black;
    }


    input[type=radio] {
        margin: 0 10px;

    }

    input[type=email] {
        color: black;
        background: transparent;
        width: 18%;
        padding: 12px 15px;
        margin: 5px 10px;
        font-size: 20px;
        border: none;
        outline: none;
        border-bottom: 2px solid rgb(185, 185, 185);
    }

    input[type=email]:focus {
        box-shadow: 3px 10px 10px 0 rgba(0, 0, 0, 0.2);
        border: 2px solid black;
    }

    input[type=date] {
        color: black;
        background: transparent;
        width: 18%;
        padding: 12px 15px;
        margin: 5px 10px;
        font-size: 20px;
        border: none;
        outline: none;
        border-bottom: 2px solid rgb(185, 185, 185);
    }

    input[type=date]:focus {
        box-shadow: 3px 10px 10px 0 rgba(0, 0, 0, 0.2);
        border: 2px solid black;
    }

    input[type=password] {
        color: black;
        background: transparent;
        width: 18%;
        padding: 12px 15px;
        margin: 5px 10px;
        font-size: 20px;
        border: none;
        outline: none;
        border-bottom: 2px solid rgb(185, 185, 185);
    }

    input[type=password]:focus {
        box-shadow: 3px 10px 10px 0 rgba(0, 0, 0, 0.2);
        border: 2px solid black;
    }

    textarea {
        color: black;
        background: transparent;
        width: 18%;
        height: 90px;
        padding: 12px 15px;
        margin: 5px 10px;
        font-size: 20px;
        border: none;
        outline: none;
        border-bottom: 2px solid rgb(185, 185, 185);
        resize: vertical;
    }

    textarea:focus {
        box-shadow: 3px 10px 10px 0 rgba(0, 0, 0, 0.2);
        border: 2px solid black;

    }

    button {
        margin-top: 20px;
        margin-left: 220px;
        text-align: center;
        width: 12%;
        height: 50px;
        padding: 5px;
        font-size: 20px;
        border-radius: 40px;
        background-color: #11101d;
        color: white;
    }

    button:hover {
        cursor: pointer;
        border: none;
        background-color: #3DD98D;
        color: whitesmoke;
    }
</style>

</html>