<?php

use Illuminate\Foundation\Testing\RefreshDatabase;
use YourNamespace\ReportMaster\Facades\ReportMaster;

uses(RefreshDatabase::class);

it('can generate a report via API', function () {
    $data = [
        ['name' => 'John Doe', 'email' => 'john@example.com'],
        ['name' => 'Jane Doe', 'email' => 'jane@example.com'],
    ];

    $response = $this->post('/report/generate', [
        'title' => 'User Report',
        'data' => $data,
        'template' => 'default',
    ]);

    $response->assertStatus(200);
    $response->assertJsonStructure(['report']);
    $response->assertJsonFragment(['<h1>User Report</h1>']);
});

it('can download a report as pdf via API', function () {
    $data = [
        ['name' => 'John Doe', 'email' => 'john@example.com'],
        ['name' => 'Jane Doe', 'email' => 'jane@example.com'],
    ];

    $response = $this->post('/report/download/pdf', [
        'title' => 'User Report',
        'data' => $data,
        'template' => 'default',
    ]);

    $response->assertStatus(200);
    $response->assertHeader('content-type', 'application/pdf');
});

it('can download a report as excel via API', function () {
    $data = [
        ['name' => 'John Doe', 'email' => 'john@example.com'],
        ['name' => 'Jane Doe', 'email' => 'jane@example.com'],
    ];

    $response = $this->post('/report/download/excel', [
        'title' => 'User Report',
        'data' => $data,
        'template' => 'default',
    ]);

    $response->assertStatus(200);
    $response->assertHeader('content-type', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
});

it('can download a report as csv via API', function () {
    $data = [
        ['name' => 'John Doe', 'email' => 'john@example.com'],
        ['name' => 'Jane Doe', 'email' => 'jane@example.com'],
    ];

    $response = $this->post('/report/download/csv', [
        'title' => 'User Report',
        'data' => $data,
        'template' => 'default',
    ]);

    $response->assertStatus(200);
    $response->assertHeader('content-type', 'text/csv');
});

it('can view a report via API', function () {
    $data = [
        ['name' => 'John Doe', 'email' => 'john@example.com'],
        ['name' => 'Jane Doe', 'email' => 'jane@example.com'],
    ];

    $response = $this->post('/report/view', [
        'title' => 'User Report',
        'data' => $data,
        'template' => 'default',
    ]);

    $response->assertStatus(200);
    $response->assertSee('<h1>User Report</h1>');
    $response->assertSee('<td>John Doe</td>');
    $response->assertSee('<td>jane@example.com</td>');
});
