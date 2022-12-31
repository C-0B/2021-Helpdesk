<?php
// Gets the problem ID from the url
if (isset($_GET["serial"]))
    $serial = $_GET["serial"];
else
    // header("location: index.php");
    $serial = 1;

$title = "Hardware " . $serial;
include("components/header.php");

// Gets the correct problem using the id in the url. Replace this with a database query.
$hardware = [];
foreach ($hardware as $s) {
    if ($s["id"] == $id) {
        $hardware = $s;
    }
}
?>
<main>
    <div class="container">
        <header class="card">
            <div class="card-header">
                <h2 class="text-gray-900">
                    <?php echo $title ?>
                </h2>
            </div>
            <div class="card-body">
                <a href="company-equipment.php" class="text-gray-500"><?php echo "<-" ?> Back to all equipment</a>
            </div>
        </header>
        <div class="grid cols-4">
            <div style="max-width: 80%">
                <nav class="secondary-nav">
                    <a href="#"><?php echo $title ?></a>
                    <a href="#details">Hardware Details</a>
                    <a href="#delete">Delete Hardware</a>
                </nav>
            </div>
            <div class="col-3">
                <div class="card scroll-target" id="details">
                    <div class="card-header">
                        <h3>Hardware Details</h3>
                    </div>
                    <div class="card-body">
                        <form action="#" class="form-cols">
                            <div class="form-group">
                                <label for="id">Serial Number</label>
                                <input type="text" name="id" value="<?php echo $serial ?>" disabled>
                            </div>
                            <div class="form-group">
                                <label for="type">Type</label>
                                <input type="text" name="type" value="Printer">
                            </div>
                            <div class="form-group">
                                <label for="make">Make</label>
                                <input type="text" name="make" value="HP">
                            </div>
                            <div class="form-group">
                                <label for="model">Model</label>
                                <input type="text" name="model" value="HU125312">
                            </div>
                            <div class="form-group">
                                <label for="version">Version</label>
                                <input type="text" name="version" value="2">
                            </div>
                            <div class="form-group">
                                <label for="warrantystart">Warranty start date</label>
                                <input type="text" name="warrantystart" value="08-02-2018">
                            </div>
                            <div class="form-group">
                                <label for="warrantyend">Warranty end date</label>
                                <input type="text" name="warrantyend" value="08-03-2021">
                            </div>
                            <button type="submit" class="btn">
                                Save Changes
                            </button>
                        </form>
                    </div>
                </div>
                <div class="card scroll-target" id="delete">
                    <div class="card-header">
                        <h3>Delete Hardware</h3>
                    </div>
                    <div class="card-body">
                        <form action="#" class="form-cols">
                            <div class="form-group">
                                <label for="delete">Enter the serial number to confirm deletion</label>
                                <input type="text" name="delete">
                            </div>
                            <button type="submit" class="btn btn-red">
                                Delete Hardware
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php
include("components/footer.php");
?>