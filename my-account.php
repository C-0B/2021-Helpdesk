<?php
$title = "My Account";
include("components/header.php");
?>
<main>
    <div class="container">
        <header class="card">
            <div class="card-header">
                <h2 class="text-gray-900"><?php echo $title ?></h2>
            </div>
            <div class="card-body">
                <p>Logged in as <?php echo $_SESSION["username"] ?></p>
            </div>
        </header>
        <div class="grid cols-4">
            <div class="card text-center">
                <div class="card-body">
                    <dl>
                        <dt>
                            Most recently searched problem:
                        </dt>
                        <dd>
                            <div>
                                445
                            </div>
                        </dd>
                    </dl>
                    <a href="index.php" class="btn mx-auto w-50">
                        View Problems
                    </a>
                </div>
            </div>
            <?php
            if (strtoLower($_SESSION["username"]) !== "specialist") {
                echo '
                 <div class="card text-center">
                    <div class="card-body">
                        <dl>
                            <dt>
                                Most recent call searched:
                            </dt>
                            <dd>
                                <div>
                                    111
                                </div>
                            </dd>
                        </dl>
                        <a href="calls.php" class="btn mx-auto w-50">
                            View Calls
                        </a>
                    </div>
                </div>
                ';
            }

            if (strtoLower($_SESSION["username"]) === "admin" || strtoLower($_SESSION["username"]) === "analyst") {
                echo '
                 <div class="card text-center">
                    <div class="card-body">
                        <dl>
                            <dt>
                                Most productive Helpdesk Operator
                            </dt>
                            <dd>
                                <div>
                                    445445
                                </div>
                            </dd>
                        </dl>
                        <dl>
                            <dt>
                                Most productive Technical Sepcialist
                            </dt>
                            <dd>
                                <div>
                                    781365
                                </div>
                            </dd>
                        </dl>
                        <a href="staff-performance.php" class="btn mx-auto w-50">
                            View Staff Performance
                        </a>
                    </div>
                </div>
                <div class="card text-center">
                    <div class="card-body">
                        <dl>
                            <dt>
                                Number of equipment working
                            </dt>
                            <dd>
                                <div>
                                    789
                                </div>
                            </dd>
                        </dl>
                        <dl>
                            <dt>
                                Number of equipment not working
                            </dt>
                            <dd>
                                <div>
                                    102
                                </div>
                            </dd>
                        </dl>
                        <a href="equipment-performance.php" class="btn mx-auto w-50">
                            View Equipment Performance
                        </a>
                    </div>
                </div>
                ';
            }
            ?>
            <div class="card text-center">
                <div class="card-body">
                    <dl>
                        <dt>
                            Most recent piece of equipment searched by the user
                        </dt>
                        <dd>
                            <div>
                                Printer - aj712dH
                            </div>
                        </dd>
                    </dl>
                    <a href="company-equipment.php" class="btn mx-auto w-50">
                        View Company Equipment
                    </a>
                </div>
            </div>
            <?php
            if (strtoLower($_SESSION["username"]) === "admin" || strtoLower($_SESSION["username"]) === "operator") {
                echo '
                 <div class="card text-center">
                    <div class="card-body">
                        <dl>
                            <dt>
                                Problem number of the most recent problem to be reported
                            </dt>
                            <dd>
                                <div>
                                    158
                                </div>
                            </dd>
                        </dl>
                        <a href="report-problem.php" class="btn mx-auto w-50">
                            Report A Problem
                        </a>
                    </div>
                </div>
                <div class="card text-center">
                    <div class="card-body">
                        <dl>
                            <dt>
                                Problem number of the most recent call to be reported
                            </dt>
                            <dd>
                                <div>
                                    148
                                </div>
                            </dd>
                        </dl>
                        <a href="report-call.php" class="btn mx-auto w-50">
                            Report A Call
                        </a>
                    </div>
                </div>
                ';
            }
            ?>
            <div class="card text-center">
                <div class="card-body">
                    <dl>
                        <dt>
                            Staff ID of last member viewed
                        </dt>
                        <dd>
                            <div>
                                879213
                            </div>
                        </dd>
                    </dl>
                    <a href="personnel.php" class="btn mx-auto w-50">
                        View View Personnel
                    </a>
                </div>
            </div>
        </div>
        <div class="grid cols-4 scroll-target" id="settings">
            <div style="max-width: 80%">
                <nav class="secondary-nav">
                    <a href="#settings">Settings</a>
                    <a href="#details">Account Details</a>
                    <?php
                    if ($_SESSION["username"] === "specialist") {
                        echo '<a href="#availability">Availability</a>';
                    }
                    ?>
                    <a href="#changepassword">Change Password</a>
                </nav>
            </div>
            <div class="col-3">
                <div class="card scroll-target" id="details">
                    <div class="card-header">
                        <h3>Account Details</h3>
                    </div>
                    <div class="card-body">
                        <form action="#" class="form-cols">
                            <div class="form-group">
                                <label for="name">Full Name</label>
                                <input type="text" name="name" disabled>
                            </div>
                            <div class="form-group">
                                <label for="id">ID Code</label>
                                <input type="text" name="id" disabled>
                            </div>
                            <div class="form-group">
                                <label for="title">Job Title</label>
                                <input type="text" name="title" disabled>
                            </div>
                            <div class="form-group">
                                <label for="department">Department</label>
                                <input type="text" name="department" disabled>
                            </div>
                            <div class="form-group">
                                <label for="phone">Telephone Number</label>
                                <input type="text" name="phone" disabled>
                            </div>
                            <div class="form-group">
                                <label for="postcode">Branch Postcode</label>
                                <input type="text" name="postcode" disabled>
                            </div>
                            <div class="form-group">
                                <label for="email">Email Address</label>
                                <input type="text" name="email" disabled>
                            </div>
                        </form>
                    </div>
                </div>
                <?php
                if ($_SESSION["username"] === "specialist") {
                    echo '
                    <div class="card scroll-target" id="availability">
                        <div class="card-header">
                            <h3>Availability</h3>
                        </div>
                        <div class="card-body">
                            <form action="#" class="form-cols">
                                <div class="form-group">
                                    <label for="availability">Availability</label>
                                    <select name="availability">
                                        <option value="unavailable">Unavailable</option>
                                        <option value="inactive">Inactive</option>
                                        <option value="active">Active</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn">
                                    Update Availability
                                </button>
                            </form>
                        </div>
                    </div>
                    ';
                }
                ?>
                <div class="card scroll-target" id="changepassword">
                    <div class="card-header">
                        <h3>Change Password</h3>
                    </div>
                    <div class="card-body">
                        <form action="#" class="form-cols">
                            <div class="form-group">
                                <label for="currentpassword">Current Password</label>
                                <input type="text" name="currentpassword">
                            </div>
                            <div class="form-group">
                                <label for="newpassword">New Password</label>
                                <input type="text" name="newpassword">
                            </div>
                            <div class="form-group">
                                <label for="confirmpassword">Confirm New Password</label>
                                <input type="text" name="confirmpassword">
                            </div>
                            <button type="submit" class="btn">
                                Change Password
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