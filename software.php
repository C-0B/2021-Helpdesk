<?php
// Gets the problem ID from the url
if (isset($_GET["serial"]))
    $serial = $_GET["serial"];
else
    // header("location: index.php");
    $serial = 1;

$title = "Software " . $serial;
include("components/header.php");

// Gets the correct problem using the id in the url. Replace this with a database query.
$software = [];
foreach ($software as $s) {
    if ($s["id"] == $id) {
        $software = $s;
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
                    <a href="#details">Software Details</a>
                    <a href="#delete">Delete Software</a>
                </nav>
            </div>
            <div class="col-3">
                <div class="card scroll-target" id="details">
                    <div class="card-header">
                        <h3>Software Details</h3>
                    </div>
                    <div class="card-body">
                        <form action="#" class="form-cols">
                            <div class="form-group">
                                <label for="id">Serial Number</label>
                                <input type="text" name="id" value="<?php echo $serial ?>" disabled>
                            </div>
                            <div class="form-group">
                                <label for="type">Type</label>
                                <input type="text" name="type" value="Operating System">
                            </div>
                            <div class="form-group">
                                <label for="make">Make</label>
                                <input type="text" name="make" value="Microsoft">
                            </div>
                            <div class="form-group">
                                <label for="model">Model</label>
                                <input type="text" name="model" value="Windows 10">
                            </div>
                            <div class="form-group">
                                <label for="version">Version</label>
                                <input type="text" name="version" value="3.4">
                            </div>
                            <div class="form-group">
                                <label for="licensestart">License start date</label>
                                <input type="text" name="licensestart" value="17-03-2015">
                            </div>
                            <div class="form-group">
                                <label for="licenseend">License end date</label>
                                <input type="text" name="licenseend" value="17-03-2025">
                            </div>
                            <div class="form-group">
                                <label for="role">Development Location</label>
                                <select id="role" name="role">
                                    <option value="in-house">In House</option>
                                    <option value="out-of-house">Out of House</option>
                                </select>
                            </div>
                            <button type="submit" class="btn">
                                Save Changes
                            </button>
                        </form>
                    </div>
                </div>
                <div class="card scroll-target" id="delete">
                    <div class="card-header">
                        <h3>Delete Software</h3>
                    </div>
                    <div class="card-body">
                        <form action="#" class="form-cols">
                            <div class="form-group">
                                <label for="delete">Enter the serial number to confirm deletion</label>
                                <input type="text" name="delete">
                            </div>
                            <button type="submit" class="btn btn-red">
                                Delete Software
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