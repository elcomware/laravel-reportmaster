<?php

use Elcomware\ReportMaster\Facades\ReportMaster;

it('can generate a report', function () {
    $data = [
        ['name' => 'John Doe', 'email' => 'john@example.com'],
        ['name' => 'Jane Doe', 'email' => 'jane@example.com'],
    ];
    $report = ReportMaster::create('User Report')
        ->setData($data)
        ->setTemplate('default')
        ->generate();

    expect($report)->toContain('<h1>User Report</h1>')
        ->and($report)->toContain('<td>John Doe</td>')
        ->and($report)->toContain('<td>jane@example.com</td>');
});

it('can export a report as pdf', function () {
    $data = [
        ['name' => 'John Doe', 'email' => 'john@example.com'],
        ['name' => 'Jane Doe', 'email' => 'jane@example.com'],
    ];

    $report = ReportMaster::create('User Report')
        ->setData($data)
        ->setTemplate('default')
        ->download('report.pdf');

    expect($report->headers->get('content-type'))->toBe('application/pdf');
});

it('can export a report as excel', function () {
    $data = [
        ['name' => 'John Doe', 'email' => 'john@example.com'],
        ['name' => 'Jane Doe', 'email' => 'jane@example.com'],
    ];

    $report = ReportMaster::create('User Report')
        ->setData($data)
        ->setTemplate('default')
        ->export('excel');

    expect($report->headers->get('content-type'))->toBe('application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
});
