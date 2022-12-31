<?php

$calls = [
    array(
        "call code" => 187,
        "caller id" => "546791",
        "operator id" => "35213",
        "date" => "Oct 3 2016",
        "time" => "09:45",
        "reason" => "Report new problem",
        "problem" => 325,
        "notes" => "",
    ),
    array(
        "call code" => 423,
        "caller id" => "534231",
        "operator id" => "5434",
        "date" => "Nov 12 2016",
        "time" => "12:34",
        "reason" => "Discuss existing problem",
        "problem" => 122,
        "notes" => "",
    ),
    array(
        "call code" => 453,
        "caller id" => "43213",
        "operator id" => "35213",
        "date" => "Oct 11 2016",
        "time" => "15:50",
        "reason" => "Discuss existing problem",
        "problem" => 144,
        "notes" => "",
    ),


];

$problems = [
    array(
        "problemNumber" => 328,
        "description" => "Concerned about the strength of the firewall. In particular
wants to keep out illegal messages from Mexico",
        "type" => "Network",
        "specialist" => "Nick",
        "date" => "Oct 4 2016, 4.15am",
        "callCode" => "190",
        "open" => false,
        "problem-priority" => "High",
        "problem-type" => "Network - Security Breach",
        "status" => 2
    ),
    array(
        "problemNumber" => 326,
        "description" => "Email may have been hacked when using an external
        server",
        "type" => "Software",
        "specialist" => null,
        "date" => "Oct 3 2016, 9.15am",
        "callCode" => "188",
        "open" => true,
        "problem-priority" => "High",
        "problem-type" => "Network - Security Breach",
        "status" => 1
    ),
    array(
        "problemNumber" => 325,
        "description" => "Laptop running very slowly",
        "type" => "Hardware",
        "specialist" => "Clara",
        "date" => "Oct 3 2016, 9.00am",
        "callCode" => "187",
        "open" => false,
        "problem-priority" => "Low",
        "problem-type" => "Hardware - Laptop Computer",
        "status" => 3
    ),
    array(
        "problemNumber" => 327,
        "description" => "Tendency to eject CDs early",
        "type" => "Hardware",
        "specialist" => "Bert",
        "date" => "Oct 4 2016, 9.20am",
        "callCode" => "189",
        "open" => true,
        "problem-priority" => "Low",
        "problem-type" => "Hardware - Laptop Computer",
        "status" => 0
    )
];

$personnel = [
    array(
        "id" => 133614,
        "name" => "John Doe",
        "job title" => "Software Developer",
        "department" => "Research and Development",
        "phone" => "020 6549 5613",
        "branch country" => "UK",
        "branch postcode" => "RE11 3U4",
        "email" => "johndoe@makeitall.com",
        "role" => "Specialist",
        "type" => "Network",
        "available" => 0,
    ),
    array(
        "id" => 578415,
        "name" => "Max Henry",
        "job title" => "Electrical Engineer",
        "department" => "Maintenance",
        "phone" => "020 4521 3216",
        "branch country" => "USA",
        "branch postcode" => "54162",
        "email" => "maxhenry@makeitall.com",
        "role" => "Specialist",
        "type" => "Hardware",
        "available" => "1",
    ),
    array(
        "id" => 657911,
        "name" => "Jane Smith",
        "job title" => "Software Tester",
        "department" => "Research and Development",
        "phone" => "020 5496 6652",
        "branch country" => "USA",
        "branch postcode" => "54162",
        "email" => "janesmith@makeitall.com",
        "role" => "Specialist",
        "type" => "Software",
        "available" => 2,

    ),
    array(
        "id" => 321564,
        "name" => "Sam Jones",
        "job title" => "Technical Specialist",
        "department" => "Helpdesk",
        "phone" => "020 1325 4762",
        "branch country" => "Japan",
        "branch postcode" => "8432543",
        "email" => "samjones@makeitall.com",
        "role" => "Specialist",
        "type" => "Network",
        "available" => 0,
    ),
    array(
        "id" => 641547,
        "name" => "James Johnson",
        "job title" => "Helpdesk Operator",
        "department" => "Helpdesk",
        "phone" => "020 1325 4762",
        "branch country" => "UK",
        "branch postcode" => "RE11 3U4",
        "email" => "jamesjohnson@makeitall.com",
        "role" => "Operator",
    )
];

$software = [
    array(
        "serial number" => 215,
        "type" => "Operating System",
        "make" => "Microsoft",
        "model" => "Windows 10",
        "version" => 3.4,
        "license start" => "05-08-2018",
        "license end" => "05-08-2023",
        "in-house" => false,
    ),

    array(
        "serial number" => 157,
        "type" => "Word Processor",
        "make" => "Microsoft",
        "model" => "Word",
        "version" => 2.3,
        "license start" => "10-07-2019",
        "license end" => "10-07-2025",
        "in-house" => false,
    ),

    array(
        "serial number" => 267,
        "type" => "Photo Editing",
        "make" => "Adobe",
        "model" => "Photoshop",
        "version" => 9.5,
        "license start" => "06-06-2020",
        "license end" => "06-06-2024",
        "in-house" => false,
    ),
];


$hardware = [
    array(
        "serial number" => 155,
        "type" => "Printer",
        "make" => "HP",
        "model" => "HU125312",
        "version" => 2,
        "warranty start" => "04-02-2018",
        "warranty end" => "04-02-2020",
    ),
    array(
        "serial number" => 123,
        "type" => "Scanner",
        "make" => "Epson",
        "model" => "V600",
        "version" => 1,
        "warranty start" => "03-04-2017",
        "warranty end" => "03-04-2018",
    ),
    array(
        "serial number" => 641,
        "type" => "Headset",
        "make" => "Mpow",
        "model" => "DH1874",
        "version" => 3,
        "warranty start" => "01-05-2020",
        "warranty end" => "01-05-2021",
    ),
];
