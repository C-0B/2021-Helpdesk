<?php
$title = "Calls";
include("components/header.php");
?>
<main>
    <div class="container">
        <div class="card">
            <div class="card-header flex ">
                <h2><?php echo $title ?></h2>
                <?php
                if (strtoLower($_SESSION["username"]) === "operator" || strtoLower($_SESSION["username"]) === "admin") {
                    echo '<div>
                            <a href="report-call.php" class="btn">Report Call</a>
                        </div>';
                }
                ?>
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
                            <input id="search" type="text" placeholder="Search calls by caller ID, reason or problem number" onkeyup="searchList()">
                        </div>
                        <button onclick="searchList()">Search</button>
                    </div>
                </div>
                <div id="filter-count"></div>
                <div class="table-wrapper">
                    <table id="filter-container">
                        <thead>
                            <tr>
                                <th>Call</th>
                                <th>Caller ID</th>
                                <th>Operator ID</th>
                                <th>Date</th>
                                <th>Time</th>
                                <th>Problem Number</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($calls as $call) {
                                echo '<tr class="filter-item">
                                <td>
                                <a href="call.php?code=' . $call["call code"] . '" class="text-primary-600">Call ' . $call["call code"] . '
                                <span>' . $call["reason"] . '</span>
                                </a>
                                </td>
                                    <td>' . $call["caller id"] . '</td>
				    <td>' . $call["operator id"] . '</td>
                                    <td>' . $call["date"] . '</td>
                                    <td>' . $call["time"] . '</td>
                                    <td> ' . ($call["problem"] ? $call["problem"] : "-") . '</td>
                                </tr>';
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>
<?php
include("components/footer.php");
?>