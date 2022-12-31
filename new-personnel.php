<?php
$title = "Add New Personnel";
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
                <a href="personnel.php" class="text-gray-500"><?php echo "<-" ?> Back to all personnel</a>
            </div>
        </header>
        <div class="grid cols-4">
            <div style="max-width: 80%">
                <nav class="secondary-nav">
                    <a href="#"><?php echo $title ?></a>
                    <a href="#caller">New Personnel Details</a>
                </nav>
            </div>
            <div class="col-3">
                <div class="card scroll-target" id="details">
                    <div class="card-header">
                        <h3>New Personnel Details</h3>
                    </div>
                    <div class="card-body">
                        <form action="#" class="form-cols">
			<div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" name="name">
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone Number</label>
                                <input type="text" name="phone">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" name="email">
                            </div>
                            <div class="form-group">
                                <label for="jobTitle">Job Title</label>
                                <input type="text" name="jobTitle">
                            </div>
                            <div class="form-group">
                                <label for="department">Department</label>
                                <input type="text" name="department">
                            </div>
                            <div class="form-group">
                                <label for="country">Country</label>
                                <input type="text" name="country">
                            </div>
                            <div class="form-group">
                                <label for="postcode">Postcode</label>
                                <input type="text" name="country">
                            </div>
                            <div class="form-group">
                                <label for="role">Role</label>
                                <select id="role" name="role">
                                    <option value="admin">Admin</option>
                                    <option value="specialist">Specialist</option>
                                    <option value="operator">Operator</option>
                                    <option value="analyst">Analyst</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="availability">Availability</label>
                                <select id="availability" name="availability">
                                    <option value="active">Active</option>
                                    <option value="inactive">Inactive</option>
                                    <option value="unavailable">Unavailable</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-lg">
                                Add New Employee
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