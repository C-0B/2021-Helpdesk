<?php
$title = "Staff Performance";
include("components/header.php");

$specialist = array();
$operator = array();
foreach ($personnel as $person) {
    if ($person["role"] == "Specialist") {
        array_push($specialist, $person);
    } else {
        array_push($operator, $person);
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
            <div class="card-body" style="padding-top: .25rem; padding-bottom: 0">
                <nav class="tabs">
                    <a class="tablink active" onclick="changeTab(event, 'operator')">
                        Operator Analytics
                    </a>
                    <a class="tablink" onclick="changeTab(event, 'specialist')">
                        Specialist Analytics
                    </a>
                </nav>
            </div>
        </header>
        <!-- Operator analytics -->
        <div class="tab" id="operator">
            <div class="grid cols-6">
                <div class="card">
                    <div class="card-body">
                        <dl>
                            <dt>
                                Problems submitted
                            </dt>
                            <dd>
                                <div>
                                    84
                                </div>
                            </dd>
                        </dl>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <dl>
                            <dt>
                                Problems solved
                            </dt>
                            <dd>
                                <div>
                                    68
                                </div>
                            </dd>
                        </dl>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <dl>
                            <dt>
                                Avg. solution time
                            </dt>
                            <dd>
                                <div>
                                    2.4 days
                                </div>
                            </dd>
                        </dl>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <dl>
                            <dt>
                                Total Calls
                            </dt>
                            <dd>
                                <div>
                                    125
                                </div>
                            </dd>
                        </dl>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <dl>
                            <dt>
                                Avg. calls/hour
                            </dt>
                            <dd>
                                <div>
                                    0.4
                                </div>
                            </dd>
                        </dl>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <dl>
                            <dt>
                                Avg. calls/problem
                            </dt>
                            <dd>
                                <div>
                                    1.2
                                </div>
                            </dd>
                        </dl>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h3>Operators</h3>
                </div>
                <div class="card-body">
                    <div class="table-wrapper" id="filter-container">
                        <table id="filter-container">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th>Job Title</th>
                                    <th>Branch Location</th>
                                    <th>Role</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($operator as $person) {
                                    echo '<tr class="filter-item">
                                    <td class="text-gray-900">
                                        <div class="flex align-center">                   
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 184.9 184.9" width="2rem" height="2rem">
                                                <style type="text/css">  
                                                    .st0{fill:#d2d6dc;}
                                                    .st1{fill:#f4f5f7;}
                                                    .st2{fill:#d2d6dc;}
                                                </style>
                                                <circle class="st0" cx="92.5" cy="92.5" r="92.5"/><path class="st1" d="M92.5 109.4c31.2 0 59.1 12.9 77.7 33.3 9.4-14.4 14.8-31.7 14.8-50.2C184.9 41.4 143.5 0 92.5 0 41.4 0 0 41.4 0 92.5c0 18.5 5.4 35.7 14.8 50.2C33.4 122.3 61.3 109.4 92.5 109.4z"/><circle class="st2" cx="92.5" cy="63.5" r="31.8"/>
                                            </svg>
                                            <div class="name" style="margin-left: 1.5rem">' . $person["name"] . '<span>ID: ' . $person["id"] . '</span></div>
                                        </div>
                                    </td>
                                    <td>' . $person["phone"] . '</td>
                                    <td>' . $person["email"] . '</td>
                                    <td>' . $person["job title"] . '<span>in ' . $person["department"] . '</span></td>
                                    <td>' . $person["branch country"] . '<span>' . $person["branch postcode"] . '</span></td>
                                    <td>' . $person["role"] . '</td>
                                </tr>';
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="grid cols-3">
                <div class="card">
                    <div class="card-header">
                        <h3>Most reported problem types</h3>
                    </div>
                    <div class="card-body">
                        <ol>
                            <li>Desktop computer</li>
                            <li>Display</li>
                            <li>Slow internet access</li>
                            <li>Software crashing</li>
                            <li>Laptop computer</li>
                            <li>Keyboard</li>
                            <li>Security breach</li>
                            <li>Software is slow</li>
                            <li>Mouse</li>
                            <li>Unable to connect</li>
                        </ol>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h3>Most difficult problem types</h3>
                    </div>
                    <div class="card-body">
                        <ol>
                            <li>Slow internet access</li>
                            <li>Display</li>
                            <li>Laptop computer</li>
                            <li>Printer</li>
                            <li>Unable to connect</li>
                            <li>Security breach</li>
                            <li>Mouse</li>
                            <li>Frequent disconnects to the internet</li>
                            <li>Speakers</li>
                            <li>Software crashing</li>
                        </ol>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h3>Most unresolved problems</h3>
                    </div>
                    <div class="card-body">
                        <ol>
                            <li>Software crashing</li>
                            <li>Keyboard</li>
                            <li>Security breach</li>
                            <li>Mouse</li>
                            <li>Software not responding</li>
                            <li>Speakers</li>
                            <li>Desktop computer</li>
                            <li>Printer</li>
                            <li>Software is slow</li>
                            <li>Software not closing</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- Specialist Analytics -->
        <div class="tab" id="specialist" style="display: none">
            <div class="grid cols-5">
                <div class="card">
                    <div class="card-body">
                        <dl>
                            <dt>
                                Problems assigned
                            </dt>
                            <dd>
                                <div>
                                    75
                                </div>
                            </dd>
                        </dl>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <dl>
                            <dt>
                                Problems solved
                            </dt>
                            <dd>
                                <div>
                                    56
                                </div>
                            </dd>
                        </dl>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <dl>
                            <dt>
                                Problems unsolved
                            </dt>
                            <dd>
                                <div>
                                    19
                                </div>
                            </dd>
                        </dl>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <dl>
                            <dt>
                                Avg. solution time
                            </dt>
                            <dd>
                                <div>
                                    1.5 days
                                </div>
                            </dd>
                        </dl>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <dl>
                            <dt>
                                Solutions suggested
                            </dt>
                            <dd>
                                <div>
                                    12
                                </div>
                            </dd>
                        </dl>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h3>Specialists</h3>
                </div>
                <div class="card-body">
                    <div class="table-wrapper" id="filter-container">
                        <table id="filter-container">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th>Job Title</th>
                                    <th>Branch Location</th>
                                    <th>Role</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($specialist as $person) {
                                    echo '<tr class="filter-item">
                                    <td class="text-gray-900">
                                        <div class="flex align-center">                   
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 184.9 184.9" width="2rem" height="2rem">
                                                <style type="text/css">  
                                                    .st0{fill:#d2d6dc;}
                                                    .st1{fill:#f4f5f7;}
                                                    .st2{fill:#d2d6dc;}
                                                </style>
                                                <circle class="st0" cx="92.5" cy="92.5" r="92.5"/><path class="st1" d="M92.5 109.4c31.2 0 59.1 12.9 77.7 33.3 9.4-14.4 14.8-31.7 14.8-50.2C184.9 41.4 143.5 0 92.5 0 41.4 0 0 41.4 0 92.5c0 18.5 5.4 35.7 14.8 50.2C33.4 122.3 61.3 109.4 92.5 109.4z"/><circle class="st2" cx="92.5" cy="63.5" r="31.8"/>
                                            </svg>
                                            <div class="name" style="margin-left: 1.5rem">' . $person["name"] . '<span>ID: ' . $person["id"] . '</span></div>
                                        </div>
                                    </td>
                                    <td>' . $person["phone"] . '</td>
                                    <td>' . $person["email"] . '</td>
                                    <td>' . $person["job title"] . '<span>in ' . $person["department"] . '</span></td>
                                    <td>' . $person["branch country"] . '<span>' . $person["branch postcode"] . '</span></td>
                                    <td>' . $person["role"] . '</td>
                                </tr>';
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="grid cols-3">
                <div class="card">
                    <div class="card-header">
                        <h3>Most reported problem types</h3>
                    </div>
                    <div class="card-body">
                        <ol>
                            <li>Desktop computer</li>
                            <li>Display</li>
                            <li>Slow internet access</li>
                            <li>Software crashing</li>
                            <li>Laptop computer</li>
                            <li>Keyboard</li>
                            <li>Security breach</li>
                            <li>Software is slow</li>
                            <li>Mouse</li>
                            <li>Unable to connect</li>
                        </ol>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h3>Most difficult problem types</h3>
                    </div>
                    <div class="card-body">
                        <ol>
                            <li>Slow internet access</li>
                            <li>Display</li>
                            <li>Laptop computer</li>
                            <li>Printer</li>
                            <li>Unable to connect</li>
                            <li>Security breach</li>
                            <li>Mouse</li>
                            <li>Frequent disconnects to the internet</li>
                            <li>Speakers</li>
                            <li>Software crashing</li>
                        </ol>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h3>Most unresolved problems</h3>
                    </div>
                    <div class="card-body">
                        <ol>
                            <li>Software crashing</li>
                            <li>Keyboard</li>
                            <li>Security breach</li>
                            <li>Mouse</li>
                            <li>Software not responding</li>
                            <li>Speakers</li>
                            <li>Desktop computer</li>
                            <li>Printer</li>
                            <li>Software is slow</li>
                            <li>Software not closing</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php
include("components/footer.php");
?>