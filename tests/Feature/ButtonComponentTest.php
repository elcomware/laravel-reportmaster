<?php

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Blade;

uses(RefreshDatabase::class);

it('renders the button component correctly', function () {
    $label = 'User Report';
    $headers = ['Name', 'Email'];
    $rows = [
        ['John Doe', 'john@example.com'],
        ['Jane Doe', 'jane@example.com'],
    ];

    $html =  Blade::renderComponent(
        new Elcomware\ReportMaster\Components\Button()
    );

    expect($html)->toContain('<h1>User Report</h1>');
    expect($html)->toContain('<th>Name</th>');
    expect($html)->toContain('<th>Email</th>');
    expect($html)->toContain('<td>John Doe</td>');
    expect($html)->toContain('<td>jane@example.com</td>');
});
