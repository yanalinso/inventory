<?php
    session_start();

    if(!isset($_SESSION['username'])){
        $m = "Please Login First!";

        echo "
            <script type = 'text/javascript'>
            alert('$m');
            window.location.replace('../index.php');
            </script>
            ";
}
    ?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="../assets/img/favicon.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Material Dashboard by Creative Tim</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <!-- Bootstrap core CSS     -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <!--  Material Dashboard CSS    -->
    <link href="../assets/css/material-dashboard.css?v=1.2.0" rel="stylesheet" />
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="../assets/css/demo.css" rel="stylesheet" />
    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>


</head>

<body>
    <div class="wrapper">
        <div class="sidebar" data-color="purple" data-image="../assets/img/sidebar-1.jpg">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

        Tip 2: you can also add an image using data-image tag
    -->
            <div class="logo">
                <a href="http://www.creative-tim.com" class="simple-text">

                    <?php
                    echo $_SESSION['username'];

                    ?>
                </a>
            </div>
            <div class="sidebar-wrapper">
                <ul class="nav">

                    <li class="active">
                        <a href="items.php">
                            <i class="material-icons">content_paste</i>
                            <p>Items</p>
                        </a>
                    </li>
                    <li>
                        <a href="issuance.php">
                            <i class="material-icons">content_paste</i>
                            <p>Issuance</p>
                        </a>
                    </li>

                </ul>
            </div>
        </div>
        <div class="main-panel">
            <nav class="navbar navbar-transparent navbar-absolute">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <div class="dropdown te">
                            <a class="navbar-brand dropdown-toggle" data-toggle="dropdown" href="#">Select Category<span class="glyphicon glyphicon-chevron-down"></span></a>
                            <ul class="dropdown-menu ">
                                <li>
                                    <a href="items.php">A - Office Supplies</a>
                                    <a href="two.php">B - Printer and Photocopier</a>
                                    <a href="three.php">C - Janitorial Supplies</a>
                                    <a href="four.php">D - Office Suuplies w/ ICS</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="material-icons">dashboard</i>
                                    <p class="hidden-lg hidden-md">Dashboard</p>
                                </a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="material-icons">notifications</i>
                                    <span class="notification">5</span>
                                    <p class="hidden-lg hidden-md">Notifications</p>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="#">Mike John responded to your email</a>
                                    </li>
                                    <li>
                                        <a href="#">You have 5 new tasks</a>
                                    </li>
                                    <li>
                                        <a href="#">You're now friend with Andrew</a>
                                    </li>
                                    <li>
                                        <a href="#">Another Notification</a>
                                    </li>
                                    <li>
                                        <a href="#">Another One</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="material-icons">person</i>
                                    <p class="hidden-lg hidden-md">Profile</p>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href = "../php/logout.php">Logout</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>

                    </div>
                </div>
            </nav>

            <!-- Modal for Edit Item -->

            <div class="modal col-lg-12" id="edit_item" data-backdrop="static">
                <div class="modal-dialog" style="width:99%;">
                    <div class="modal-content">

                    </div>
                </div>
            </div>

            <!-- Modal for Add Item -->
            <div class="modal col-lg-12" id="add_item" data-backdrop="static">
                <div class="modal-dialog" style="width:99%;">
                    <div class="modal-content">

                    </div>
                </div>
            </div>
            <!-- Modal for Delete Item -->

            <div class="modal col-lg-12" id="del_item" data-backdrop="static">
                <div class="modal-dialog" style="width:27%;">
                    <div class="modal-content">

                    </div>
                </div>
            </div>
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header" data-background-color="blue">

                                    <h4 class="title">A - Office Supplies
                                        <form class="form-inline pull-right" role="search">
                                            <div class="form-group  is-empty">
                                                <input type="text" class="form-control" placeholder="Search" style="::webki-input-placeholder:{ color: red}">
                                                <span class="material-input"></span>

                                            <button type="submit" class="btn btn-white btn-round btn-just-icon">
                                                <i class="material-icons">search</i>
                                                <div class="ripple-container"></div>
                                            </button>
                                        </form>
                                    </h4>

                                    <!--
                                    <form class="navbar-form navbar-right" role="search">
                                        <div class="form-group  is-empty">
                                            <input type="text" class="form-control" placeholder="Search">
                                            <span class="material-input"></span>
                                        </div>
                                        <button type="submit" class="btn btn-white btn-round btn-just-icon">
                                            <i class="material-icons">search</i>
                                            <div class="ripple-container"></div>
                                        </button>
                                    </form>
                                    -->

                                </div>


                                <div class="card-content table-responsive">


                                    <table class="table">
                                        <thead class="text-primary">
                                            <th>Category</th>
                                            <th>ACCT-SN</th>
                                            <th>PGSO-SN</th>
                                            <th>ITEM DESCRIPTION</th>
                                            <th>UOM</th>
                                            <th>Starting Quantity</th>
                                            <th>UNIT COST</th>
                                            <th>BRAND</th>
                                            <th>RO-P</th>
                                            <th>Process</th>
                                        </thead>
                                        <tbody>
                                            <?php
                                            require '../php/db.php';
                                            $_SESSION['temp'] =  basename($_SERVER['PHP_SELF']);

                                            $sql = "SELECT * FROM items WHERE category = '01'";
                                            $res = $conn->query($sql);
                                            if($res->num_rows > 0){
                                                while($row = $res->fetch_assoc()){
                                                    echo "<tr>"
                                                        . "<td>" . $row['category'] . "</td>"
                                                        . "<td>" . $row['acctSn'] . "</td>"
                                                        . "<td>" . $row['pgsoSn'] . "</td>"
                                                        . "<td>" . $row['description'] . "</td>"
                                                        . "<td>" . $row['unit'] . "</td>"
                                                        . "<td>" . $row['startingQuantity'] . "</td>"
                                                        . "<td>" . $row['unitCost'] . "</td>"
                                                        . "<td>" . $row['brand'] . "</td>"
                                                        . "<td>" . $row['orderPoint'] . "</td>"
                                                        . "<td>" . "<a href =" . '../php/editItem.php?num='.$row['id'] . " " . " type='button' rel='tooltip' title='Edit ' class='btn btn-primary btn-simple btn-xs' data-toggle='modal' data-target='#edit_item'>
                                                                <i class='material-icons'>edit</i>
                                                            </a>" . "<a href =" . '../php/itemDelete.php?num='.$row['id'] . " " . "type='button' rel='tooltip' title='Remove' class='btn btn-danger btn-simple btn-xs' data-toggle='modal'  data-target='#del_item'>
                                                                <i class='material-icons'>close</i>
                                                            </a>"
                                                        ."</td>"
                                                        . "</tr>";
                                                }


                                            }else{
                                                echo "<td><p>No records in the database!</p></td>";
                                            }

                                            ?>
                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</body>
<!--   Core JS Files   -->
<script src="../assets/js/jquery-3.2.1.min.js" type="text/javascript"></script>
<script src="../assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="../assets/js/material.min.js" type="text/javascript"></script>
<!--  Charts Plugin -->
<script src="../assets/js/chartist.min.js"></script>
<!--  Dynamic Elements plugin -->
<script src="../assets/js/arrive.min.js"></script>
<!--  PerfectScrollbar Library -->
<script src="../assets/js/perfect-scrollbar.jquery.min.js"></script>
<!--  Notifications Plugin    -->
<script src="../assets/js/bootstrap-notify.js"></script>
<!-- Material Dashboard javascript methods -->
<script src="../assets/js/material-dashboard.js?v=1.2.0"></script>
<!-- Custom JS -->
<script src="../assets/js/custom.js"></script>

<script type="text/javascript">
    function NumberOnly() {
        var num = document.getElementById("quantity")

        num.addEventListener("keydown", function(e) {
        // prevent: "e", "=", ",", "-", "."
        if ([69, 187, 188, 189, 190].includes(e.keyCode)) {
        e.preventDefault();
        }
        })

    }

    function NumberOnly2() {
        var num = document.getElementById("quantity")

        num.addEventListener("keydown", function(e) {
            // prevent: "e", "=", ",", "-", "."
            if ([69, 187, 188, 189, 190].includes(e.keyCode)) {
                e.preventDefault();
            }
        })

    }

    function NumberOnly3() {
        var num = document.getElementById("quantity")

        num.addEventListener("keydown", function(e) {
            // prevent: "e", "=", ",", "-", "."
            if ([69, 187, 188, 189, 190].includes(e.keyCode)) {
                e.preventDefault();
            }
        })

    }
</script>

</html>