<?php include('includes/header.php'); 
include('includes/navbar.php');


?>

        

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-danger badge-counter">3+</span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Alerts Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 12, 2019</div>
                                        <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-success">
                                            <i class="fas fa-donate text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 7, 2019</div>
                                        $290.29 has been deposited into your account!
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-warning">
                                            <i class="fas fa-exclamation-triangle text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 2, 2019</div>
                                        Spending Alert: We've noticed unusually high spending for your account.
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                            </div>
                        </li>

                        <!-- Nav Item - Messages -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-envelope fa-fw"></i>
                                <!-- Counter - Messages -->
                                <span class="badge badge-danger badge-counter">7</span>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="messagesDropdown">
                                <h6 class="dropdown-header">
                                    Message Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_1.svg"
                                            alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div class="font-weight-bold">
                                        <div class="text-truncate">Hi there! I am wondering if you can help me with a
                                            problem I've been having.</div>
                                        <div class="small text-gray-500">Emily Fowler · 58m</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_2.svg"
                                            alt="...">
                                        <div class="status-indicator"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">I have the photos that you ordered last month, how
                                            would you like them sent to you?</div>
                                        <div class="small text-gray-500">Jae Chun · 1d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_3.svg"
                                            alt="...">
                                        <div class="status-indicator bg-warning"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Last month's report looks great, I am very happy with
                                            the progress so far, keep up the good work!</div>
                                        <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60"
                                            alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Am I a good boy? The reason I ask is because someone
                                            told me that people say this to all dogs, even if they aren't good...</div>
                                        <div class="small text-gray-500">Chicken the Dog · 2w</div>
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Admin</span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                        
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                    <?php
$servername = "localhost";
$username = "root";
$password = "admin";
$database = "vms"; // Replace with your actual database name

$connection = new mysqli($servername, $username, $password, $database);

if ($connection->connect_error) {
    die("Connection Failed!" . $connection->connect_error);
}

// Query to calculate the total number of available vehicles
$sqlTotalVehicles = "SELECT COUNT(*) as total_vehicles FROM vehicle";
$resultTotalVehicles = $connection->query($sqlTotalVehicles);

if ($resultTotalVehicles) {
    $rowTotalVehicles = $resultTotalVehicles->fetch_assoc();
    $totalVehicles = $rowTotalVehicles['total_vehicles'];
} else {
    $totalVehicles = 0; // Default value if there's an error in the query
}

$connection->close();
?>

<!-- Total Available Vehicles Card Example -->
<div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                        Total Available Vehicles</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $totalVehicles; ?></div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-car fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

                        <?php
$servername = "localhost";
$username = "root";
$password = "admin";
$database = "vms"; // Replace with your actual database name

$connection = new mysqli($servername, $username, $password, $database);

if ($connection->connect_error) {
    die("Connection Failed!" . $connection->connect_error);
}

// Query to calculate the total number of employees
$sqlTotalEmployees = "SELECT COUNT(*) as total_employees FROM employee"; // Replace with your actual employee table name
$resultTotalEmployees = $connection->query($sqlTotalEmployees);

if ($resultTotalEmployees) {
    $rowTotalEmployees = $resultTotalEmployees->fetch_assoc();
    $totalEmployees = $rowTotalEmployees['total_employees'];
} else {
    $totalEmployees = 0; // Default value if there's an error in the query
}

$connection->close();
?>

<!-- Total Employees Card Example -->
<div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                        Employees</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $totalEmployees; ?></div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-user fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
$servername = "localhost";
$username = "root";
$password = "admin";
$database = "vms"; // Replace with your actual database name

$connection = new mysqli($servername, $username, $password, $database);

if ($connection->connect_error) {
    die("Connection Failed!" . $connection->connect_error);
}

// Query to calculate the total number of vehicles sold
$sqlTotalSoldVehicles = "SELECT COUNT(*) as total_sold_vehicles FROM customer_sales"; // Replace with your actual customer sales table name
$resultTotalSoldVehicles = $connection->query($sqlTotalSoldVehicles);

if ($resultTotalSoldVehicles) {
    $rowTotalSoldVehicles = $resultTotalSoldVehicles->fetch_assoc();
    $totalSoldVehicles = $rowTotalSoldVehicles['total_sold_vehicles'];
} else {
    $totalSoldVehicles = 0; // Default value if there's an error in the query
}

$connection->close();
?>

<!-- Total Customers Vehicle Sold Card Example -->
<div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                        Total Customers Vehicle Sold
                    </div>
                    <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                            <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo $totalSoldVehicles; ?></div>
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-users fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>


                        <?php
$servername = "localhost";
$username = "root";
$password = "admin";
$database = "vms";

$connection = new mysqli($servername, $username, $password, $database);

if ($connection->connect_error) {
    die("Connection Failed!" . $connection->connect_error);
}

// Query to calculate the total earnings
$sqlTotalEarnings = "SELECT SUM(cost) as total_earnings FROM customer_sales";
$resultTotalEarnings = $connection->query($sqlTotalEarnings);

if ($resultTotalEarnings) {
    $rowTotalEarnings = $resultTotalEarnings->fetch_assoc();
    $totalEarnings = $rowTotalEarnings['total_earnings'];
} else {
    $totalEarnings = 0; // Default value if there's an error in the query
}

$connection->close();
?>

<!-- Total Earnings Card Example -->
<div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                        Total Earnings</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">₱<?php echo number_format($totalEarnings); ?></div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<?php

$servername = "localhost";
$username = "root";
$password = "admin";
$database = "vms";

$connection = new mysqli($servername, $username, $password, $database);

if ($connection->connect_error) {
    die("Connection Failed!" . $connection->connect_error);
}

// Query to get the sold vehicle count by manufacturer
$countQuery = "SELECT manufacturer, COUNT(*) as soldCount FROM customer_sales GROUP BY manufacturer ORDER BY soldCount DESC";

$countResult = $connection->query($countQuery);

if (!$countResult) {
    die("Invalid count query" . $connection->error);
}

// Create an associative array to store manufacturer-wise sold vehicle count
$manufacturerCounts = array();

while ($countRow = $countResult->fetch_assoc()) {
    $manufacturer = $countRow['manufacturer'];
    $soldCount = $countRow['soldCount'];
    $manufacturerCounts[$manufacturer] = $soldCount;
}


$connection->close();
?>

<?php

$servername = "localhost";
$username = "root";
$password = "admin";
$database = "vms";

$connection = new mysqli($servername, $username, $password, $database);

if ($connection->connect_error) {
    die("Connection Failed!" . $connection->connect_error);
}

// Query to get the total cost of vehicles sold by each manufacturer
$totalCostQuery = "SELECT manufacturer, SUM(cost) as totalCost FROM customer_sales GROUP BY manufacturer ORDER BY totalCost DESC";

$totalCostResult = $connection->query($totalCostQuery);

if (!$totalCostResult) {
    die("Invalid total cost query" . $connection->error);
}

// Create an associative array to store manufacturer-wise total cost
$manufacturerTotalCost = array();

while ($totalCostRow = $totalCostResult->fetch_assoc()) {
    $manufacturer = $totalCostRow['manufacturer'];
    $totalCost = $totalCostRow['totalCost'];
    $manufacturerTotalCost[$manufacturer] = $totalCost;
}

$connection->close();
?>


<div class="container mt-4">
    <div class="row">
        <!-- Display TOP 5 Sold Vehicle by Manufacturer -->
        <div class="col-md-6 mb-4">
            <h2 class="text-center mb-4"><b>TOP 5 Sold Vehicle by Manufacturer</b></h2>
            <table class="table border" style="border: 2px solid #000000; padding: 10px; width: 100%;">
                <thead>
                    <tr>
                        <th>Manufacturer</th>
                        <th>Sold Count</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($manufacturerCounts as $manufacturer => $soldCount) {
                        echo "
                        <tr>
                            <td>{$manufacturer}</td>
                            <td>{$soldCount}</td>
                        </tr>
                        ";
                    }
                    ?>
                </tbody>
            </table>
        </div>

        <!-- Display TOP Manufacturers by Sales Cost -->
        <div class="col-md-6 mb-4">
            <h2 class="text-center mb-4"><b>TOP 5 Manufacturers by Vehicle Sales Cost</b></h2>
            <table class="table border" style="border: 2px solid #000000; padding: 10px; width: 100%;">
                <thead>
                    <tr>
                        <th>Manufacturer</th>
                        <th>Total Cost</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($manufacturerTotalCost as $manufacturer => $totalCost) {
                        echo "
                        <tr>
                            <td>{$manufacturer}</td>
                            <td>₱" . number_format($totalCost) . "</td>
                        </tr>
                        ";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>













                    <!-- Content Row -->

                </div>
                <!-- /.container-fluid -->

                


            

    </div>
    <!-- End of Page Wrapper -->

    <?php include('includes/scripts.php');
    include('includes/footer.php'); 

    ?>




</body>

</html>