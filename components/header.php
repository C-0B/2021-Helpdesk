<?php
// Prototype data - replace with db queries in part 2
include("data.php");

// Gets the logged in users details from the current session if available
session_start();
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: login.php");
    exit;
}

// Connects to the mysql database
include_once("php/db-connect.php");

// Lists the pages for navigation. The "users" array determines which user types can access that page
$pages = [
    array(
        "name" => "Problems",
        "link" => "index.php",
        "users" => ["admin", "analyst", "operator", "specialist"]
    ),
    array(
        "name" => "Calls",
        "link" => "calls.php",
        "users" => ["admin", "analyst", "operator"]
    ),
    array(
        "name" => "Personnel",
        "link" => "personnel.php",
        "users" => ["admin", "analyst", "operator", "specialist"]
    ),
    array(
        "name" => "Company Equipment",
        "link" => "company-equipment.php",
        "users" => ["admin", "analyst", "operator", "specialist"]
    ),
    array(
        "name" => "Staff Performance",
        "link" => "staff-performance.php",
        "users" => ["admin", "analyst"]
    ),
    array(
        "name" => "Equipment Performance",
        "link" => "equipment-performance.php",
        "users" => ["admin", "analyst"]
    ),
    array(
        "name" => "My Account",
        "link" => "my-account.php",
        "users" => ["admin", "analyst", "operator", "specialist"]
    ),
];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title><?php echo $title ? $title : "Make-It-All Helpdesk" ?></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <section>
        <div class="primary-nav">
            <div class="container">
                <div class="navbar">
                    <div>
                        <a href="index.php" class="logo">
                            Make-It-All
                            <span>Helpdesk</span>
                        </a>
                    </div>
                    <div>
                        <span class="text-gray-300" style="font-size: .875rem">Signed in as <?php echo $_SESSION["username"]; ?></span>
                        <a href="php/logout.php" class="nav-link">Sign Out</a>
                    </div>
                </div>
                <nav>
                    <?php
                    // Adds all the pages that the user currently logged in has access to to the navigation
                    foreach ($pages as $page) {
                        if (in_array(strtolower($_SESSION["username"]), $page["users"])) {
                            if ($page["name"] == $title)
                                echo '<a href="' . $page["link"] . '" class="nav-link active">' . $page["name"] . '</a>';
                            else
                                echo '<a href="' . $page["link"] . '" class="nav-link">' . $page["name"] . '</a>';
                        }
                    }
                    ?>
                </nav>
            </div>
        </div>