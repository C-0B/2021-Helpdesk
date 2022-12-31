<?php
// Gets the problem ID from the url
if (isset($_GET["code"]))
    $code = $_GET["code"];
else
    // header("location: index.php");
    $code = 1;

$title = "Call " . $code;
include("components/header.php");

// Gets the correct problem using the id in the url. Replace this with a database query.
$call = [];
foreach ($calls as $c) {
    if ($c["call code"] == $code) {
        $call = $c;
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
                <a href="calls.php" class="text-gray-500"><?php echo "<-" ?> Back to all calls</a>
            </div>
        </header>
        <div class="grid cols-4">
            <div style="max-width: 80%">
                <nav class="secondary-nav">
                    <a href="#"><?php echo $title ?></a>
                    <a href="#details">Call Details</a>
                </nav>
            </div>
            <div class="col-3">
                <div class="card scroll-target" id="details">
                    <div class="card-header">
                        <h3>Call Details</h3>
                    </div>
                    <div class="card-body">
                        <form action="#" class="form-cols">
                            <div class="form-group">
                                <label for="code">Call Code</label>
                                <input type="text" name="code" value="<?php echo $code ?>" disabled>
                            </div>
                            <div class="form-group">
                                <label for="caller">Caller</label>
                                <input type="text" name="caller" value="546791">
                            </div>
                            <div class="form-group">
                                <label for="date">Date</label>
                                <input type="text" name="date" value="Oct 3 2016">
                            </div>
                            <div class="form-group">
                                <label for="call-reason">Reason for Call</label>
                                <select id="call-reason" name="call-reason">
                                    <option value="new-problem">Reporting a new problem</option>
                                    <option value="existing-problem">Discussing existing problem</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="problem">Problem Number</label>
                                <input type="text" name="problem" value="325">
                            </div>
                            <div class="form-group">
                                <label for="reason">Reason</label>
                                <textarea name="reason" rows="3">Laptop running very slowly</textarea>
                            </div>
                            <div class="form-group">
                                <label for="notes">Notes</label>
                                <textarea name="notes" rows="3"></textarea>
                            </div>
                            <button type="submit" class="btn btn-lg">
                                Save Changes
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