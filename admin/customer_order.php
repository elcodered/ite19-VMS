<?php
// Include necessary header files
include('includes/header.php');
include('includes/navbar.php');

// Assuming you have a database connection established
// Replace 'your_host', 'your_username', 'your_password', and 'your_database' with your actual database credentials
$mysqli = new mysqli('localhost', 'root', 'admin', 'vms');

// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// Fetch available models from the database
$result = $mysqli->query("SELECT * FROM vehicle WHERE status='Available'");

// Fetch the data into an associative array
$availableModels = array();
while ($row = $result->fetch_assoc()) {
    $availableModels[] = $row;
}

// Close the database connection
$mysqli->close();
?>

<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

        <!-- Begin Page Content -->
        <div class="container-fluid">

            <h1 class="h3 mb-0 text-gray-800">Place an Order</h1>
            <br>

            <div class="row">
                <div class="col-lg-6">
                    <!-- Customer Information Form -->
                    <form action="process_order.php" method="post">
                        <div class="form-group">
                            <label for="name">Full Name:</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="address">Address:</label>
                            <input type="text" class="form-control" id="address" name="address" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>

                        <!-- Vehicle Information -->
                        <h2 class="h4 mb-0 text-gray-800">Vehicle Information</h2>

                        <!-- Manufacturer Dropdown -->
                        <div class="form-group">
                            <label for="manufacturer">Manufacturer:</label>
                            <select class="form-control" id="manufacturer" name="manufacturer" required>
                                <?php foreach ($availableModels as $model): ?>
                                    <option value="<?= $model['manufacturer'] ?>"><?= $model['manufacturer'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <!-- Model Dropdown -->
                        <div class="form-group">
                            <label for="model">Model:</label>
                            <select class="form-control" id="model" name="model" required>
                                <?php foreach ($availableModels as $model): ?>
                                    <option value="<?= $model['model'] ?>"><?= $model['model'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <!-- Color Dropdown -->
                        <div class="form-group">
                            <label for="color">Color:</label>
                            <select class="form-control" id="color" name="color" required>
                                <?php foreach ($availableModels as $model): ?>
                                    <option value="<?= $model['color'] ?>"><?= $model['color'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <!-- Status (hidden field with value "available") -->
                        <input type="hidden" name="status" value="available">

                        <!-- Submit Button -->
                        <button type="submit" class="btn btn-primary">Place Order</button>
                    </form>
                </div>
            </div>

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->

    <?php include('includes/scripts.php'); ?>
    <?php include('includes/footer.php'); ?>

</body>

</html>
