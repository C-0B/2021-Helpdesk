<?php
$title = "Company Equipment";
include("components/header.php");
?>
<main>
    <div class="container">
        <div class="card">
            <div class="card-header" style="padding-bottom: 0">
                <div class="flex justify-between align-center">
                    <h2><?php echo $title ?></h2>
                    <?php
                    if (strtoLower($_SESSION["username"]) === "admin") {
                        echo '<div>
                        <a href="new-software.php" class="btn" style="display: inline">Add New Software</a>
                        <a href="new-hardware.php" class="btn" style="display: inline">Add New Hardware</a>
                    </div>';
                    }
                    ?>
                </div>
                <nav class="tabs">
                    <a class="tablink active" onclick="changeTab(event, 'software')">
                        Software
                    </a>
                    <a class="tablink" onclick="changeTab(event, 'hardware')">
                        Hardware
                    </a>
                </nav>
            </div>
            <div class="card-body">
                <div class="input-group-wrapper">
                    <label for="search">Search</label>
                    <div class="input-group">
                        <div class="input-group-main">
                            <div class="input-group-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <input id="search" type="text" placeholder="Search company equipment" onkeyup="searchList()">
                        </div>
                        <button onclick="searchList()">Search</button>
                    </div>
                </div>
                <div id="filter-count"></div>
                <div class="table-wrapper" id="filter-container">
                    <div class="tab" id="software">
                        <table>
                            <thead>
                                <tr>
                                    <th>Serial Number</th>
                                    <th>Type</th>
                                    <th>Make</th>
                                    <th>Model</th>
                                    <th>Version</th>
                                    <th>License</th>
                                    <th>Developed</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($software as $sw) {
                                    echo '<tr class="filter-item">
                                    <td class="text-gray-900">
                                        ' . (strToLower($_SESSION["username"]) === "admin" ? '<a href="software.php?serial=' . $sw["serial number"] . '" class="text-primary-600">' . $sw["serial number"] . '</a>' : $sw["serial number"]) . '
                                    </td>
                                    <td>' . $sw["type"] . '</td>
                                    <td>' . $sw["make"] . '</td>
                                    <td>' . $sw["model"] . '</td>
                                    <td>' . $sw["version"] . '</td>
                                    <td>' . ($sw["serial number"] > 200 ? 'Active' : 'Expired') . '</td>
                                    <td>' . ($sw["in-house"] ? 'In-house' : 'Out of house') . '</td>
                                </tr>';
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab" id="hardware" style="display: none">
                        <table>
                            <thead>
                                <tr>
                                    <th>Serial Number</th>
                                    <th>Type</th>
                                    <th>Make</th>
                                    <th>Model</th>
                                    <th>Version</th>
                                    <th>Warranty</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($hardware as $hw) {
                                    echo '<tr class="filter-item">
                                   <td class="text-gray-900">
                                        ' . (strToLower($_SESSION["username"]) === "admin" ? '<a href="hardware.php?serial=' . $hw["serial number"] . '" class="text-primary-600">' . $hw["serial number"] . '</a>' :
                                        $hw["serial number"]) . '
                                    </td>
                                    <td>' . $hw["type"] . '</td>
                                    <td>' . $hw["make"] . '</td>
                                    <td>' . $hw["model"] . '</td>
                                    <td>' . $hw["version"] . '</td>
                                    <td>' . ($hw["serial number"] > 150 ? 'Active' : 'Expired') . '</td>
                                </tr>';
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php
include("components/footer.php");
?>