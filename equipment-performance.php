<?php
$title = "Equipment Performance";
include("components/header.php");
?>
<main>
    <div class="container">
        <header class="card">
            <div class="card-header flex ">
                <h2 class="text-gray-900">
                    <?php echo $title ?>
                </h2>
            </div>
            <div class="card-body" style="padding-top: .25rem; padding-bottom: 0">
                <nav class="tabs">
                    <a class="tablink active" onclick="changeTab(event, 'software')">
                        Software
                    </a>
                    <a class="tablink" onclick="changeTab(event, 'hardware')">
                        Hardware
                    </a>
                </nav>
            </div>
        </header>
        <div class="tab" id="software">
            <div class="grid cols-3">
                <div class="card col-2">
                    <div class="card-body">
                        <dl>
                            <dt>
                                Software Problems Submitted
                            </dt>
                            <dd>
                                <div>
                                    52
                                </div>
                            </dd>
                        </dl>
                    </div>
                </div>
                <div class="card col-2">
                    <div class="card-body">
                        <dl>
                            <dt>
                                Software Problems Solved
                            </dt>
                            <dd>
                                <div>
                                    40
                                </div>
                            </dd>
                        </dl>
                    </div>
                </div>
                <div class="card col-2">
                    <div class="card-body">
                        <dl>
                            <dt>
                                Avg. solution time
                            </dt>
                            <dd>
                                <div>
                                    0.3 days
                                </div>
                            </dd>
                        </dl>
                    </div>
                </div>
            </div>
            <div class="grid cols-6">
                <div class="card col-3">
                    <div class="card-header">
                        <h3>Most unreliable software</h3>
                    </div>
                    <div class="card-body">
                        <ol>
                            <li>Windows 10</li>
                            <li>Google Chrome</li>
                            <li>Microsoft Word</li>
                            <li>Microsoft Excel</li>
                            <li>Visual Paradigm 1.14</li>
                            <li>Notepad++</li>
                            <li>File Explorer</li>
                            <li>Internet Explorer 5</li>
                            <li>Adobe Photoshop</li>
                            <li>Microsoft Outlook</li>
                        </ol>
                    </div>
                </div>
                <div class="card col-3">
                    <div class="card-header">
                        <h3>Software with the most difficult problems to solve</h3>
                    </div>
                    <div class="card-body">
                        <ol>
                            <li>Adobe Photoshop</li>
                            <li>Microsoft Outlook</li>
                            <li>Visual Paradigm 1.14</li>
                            <li>Notepad++</li>
                            <li>File Explorer</li>
                            <li>Windows 10</li>
                            <li>Google Chrome</li>
                            <li>Microsoft Word</li>
                            <li>Microsoft Excel</li>
                            <li>Internet Explorer 5</li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="card">
            </div>
        </div>
        <div class="tab" id="hardware" style="display: none">
            <div class="grid cols-3">
                <div class="card col-2">
                    <div class="card-body">
                        <dl>
                            <dt>
                                Hardware Problems Submitted
                            </dt>
                            <dd>
                                <div>
                                    23
                                </div>
                            </dd>
                        </dl>
                    </div>
                </div>
                <div class="card col-2">
                    <div class="card-body">
                        <dl>
                            <dt>
                                Hardware Problems Solved
                            </dt>
                            <dd>
                                <div>
                                    20
                                </div>
                            </dd>
                        </dl>
                    </div>
                </div>
                <div class="card col-2">
                    <div class="card-body">
                        <dl>
                            <dt>
                                Avg. solution time
                            </dt>
                            <dd>
                                <div>
                                    2.1 days
                                </div>
                            </dd>
                        </dl>
                    </div>
                </div>
            </div>
            <div class="grid cols-6">
                <div class="card col-3">
                    <div class="card-header">
                        <h3>Most unreliable hardware</h3>
                    </div>
                    <div class="card-body">
                        <ol>
                            <li>Printer - sha78sa</li>
                            <li>Desktop - j89abjs</li>
                            <li>Laptop - kajs982</li>
                            <li>Printer - 8hkSDd1</li>
                            <li>Projector - ksn7SDd</li>
                            <li>Printer - j891dbjd</li>
                            <li>Monitor - k981d1d</li>
                            <li>Laptop Charger -8HGF3ks</li>
                            <li>Printer - asd12da</li>
                            <li>Desktop - lod1k90</li>
                        </ol>
                    </div>
                </div>
                <div class="card col-3">
                    <div class="card-header">
                        <h3>Hardware with the most difficult problems to solve</h3>
                    </div>
                    <div class="card-body">
                        <ol>
                            <li>Printer - sha78sa</li>

                            <li>Desktop - lod1k90</li>
                            <li>Laptop - kajs982</li>
                            <li>Printer - 8hkSDd1</li>
                            <li>Projector - ksn7SDd</li>
                            <li>Printer - j891dbjd</li>
                            <li>Desktop - j89abjs</li>
                            <li>Monitor - k981d1d</li>
                            <li>Laptop Charger -8HGF3ks</li>
                            <li>Printer - asd12da</li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="card">
            </div>
        </div>
        <div class="card-body">
        </div>

    </div>
    </div>
</main>
<?php
include("components/footer.php");
?>