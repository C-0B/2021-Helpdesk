<?php
$title = "Report Problem";
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
                <a href="index.php" class="text-gray-500"><?php echo "<-" ?> Back to all problems</a>
            </div>
        </header>
        <div class="grid cols-4">
            <div style="max-width: 80%">
                <div class="sticky">
                    <nav class="secondary-nav">
                        <a href="#"><?php echo $title ?></a>
                        <a href="#details">Problem Details</a>
                    </nav>
                    <nav class="secondary-nav">
                        <a>Similar Problems</a>
                        <a href="problem.php?problemNumber=326" target="_blank">Problem 326</a>
                        <a href="problem.php?problemNumber=328" target="_blank">Problem 328</a>
                    </nav>
                </div>
            </div>
            <div class="col-3">
                <div class="card scroll-target" id="details">
                    <div class="card-header">
                        <h3>Problem Details</h3>
                    </div>
                    <div class="card-body">
                        <form action="#" class="form-cols">
                            <div class="form-group">
                                <label for="problem-number">Problem Number</label>
                                <input type="text" name="call-code" value="1" disabled>
                            </div>
                            <div class="form-group">
                                <label for="callCode">Call Code</label>
                                <input type="text" name="callCode">
                            </div>
                            <div class="form-group">
                                <label for="problem-type">Problem Type</label>
                                <select id="problem-state" name="problem-states">
                                    <option value="h-desktop">Hardware - Desktop computer</option>
                                    <option value="h-laptop">Hardware - Laptop computer</option>
                                    <option value="h-display">Hardware - Display</option>
                                    <option value="h-keyboard">Hardware - Keyboard</option>
                                    <option value="h-mouse">Hardware - Mouse</option>
                                    <option value="h-usb">Hardware - USB Peripheral</option>
                                    <option value="h-speakers">Hardware - Speakers</option>
                                    <option value="h-printer">Hardware - Printer</option>

                                    <option value="s-not-starting">Software - Not starting</option>
                                    <option value="s-not-closing">Software - Not closing</option>
                                    <option value="s-not-responding">Software - Not responding</option>
                                    <option value="h-crashing">Software - Crashing</option>
                                    <option value="h-slow">Software - Slow</option>

                                    <option value="n-unable-to-connect">Network - Unable to connect</option>
                                    <option value="n-no-internet">Network - Able to connect to network but not the internet</option>
                                    <option value="n-slow-internet">Network - Slow internet access</option>
                                    <option value="n-restricted-internet">Network - Restricted internet access</option>
                                    <option value="n-frequent-disconnects">Network - Frequent disconnection from the internet</option>
                                    <option value="n-security">Network - Security breach</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="hardware">Hardware</label>
                                <div>
                                    <input type="text" name="hardware">
                                </div>
                                <a href="#" class="text-primary-600" style="font-size: .9rem">Check if hardware is in warranty</a>
                            </div>
                            <div class="form-group">
                                <label for="software">Software</label>
                                <div>
                                    <input type="text" name="software">
                                </div>
                                <a href="#" class="text-primary-600" style="font-size: .9rem">Check if software is in license</a>
                            </div>
                            <div class="form-group">
                                <label for="description">Problem description</label>
                                <textarea name="description" rows="3"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="problem-priority">Problem Priority</label>
                                <select id="problem-priority" name="priorities">
                                    <option value="low">Low</option>
                                    <option value="high">High</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="local-specialist-needed">Is Local Specialist Needed</label>
                                <input type="checkbox" name="local-specialist-needed">
                            </div>
                            <div class="form-group">
                                <label for="notes">Notes</label>
                                <textarea name="notes" rows="3"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="problem-state">Problem State</label>
                                <select id="problem-state" name="problem-states">
                                    <option value="unsolved">Unsolved</option>
                                    <option value="solution-suggested">Solution Suggested</option>
                                    <option value="solved">Solved</option>
                                    <option value="invalid">Invalid</option>
                                </select>
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