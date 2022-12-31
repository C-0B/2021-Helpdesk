<?php
$title = "Report Call";
include("components/header.php");
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
                    <a href="#caller">Caller Details</a>
                </nav>
            </div>
            <div class="col-3">
                <div class="card scroll-target" id="caller">
                    <div class="card-header">
                        <h3>Caller Details</h3>
                    </div>
                    <div class="card-body">
                        <form action="#" class="form-cols">
                            <div class="form-group">
                                <label for="call-code">Call Code</label>
                                <input type="text" name="call-code" value="1" disabled>
                            </div>
                            <div class="form-group">
                                <label for="caller-id">Caller ID</label>
                                <input type="text" name="caller-id">
                            </div>
                            <div class="form-group">
                                <label for="call">Date Time</label>
                                <input type="datetime-local" name="call">
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
                                <label for="notes">Problem Number (if problem already exists)</label>
                                <input type="text" name="call">
                            </div>
                            <div class="form-group">
                                <label for="notes">Notes (optional)</label>
                                <textarea name="notes" rows="3"></textarea>
                            </div>
                            <button type="submit" class="btn btn-lg">
                                Add Problem
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