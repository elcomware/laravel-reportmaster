<?php

// config for Elcomware/ReportMaster
return [

    'defaults' => [
        'template' => 'default',
        'format' => 'pdf', // Default format for reports (pdf, xlsx, csv)
    ],
    'templates' => [
        'invoice' => 'invoice',
        'report' => 'reports.student',
    ],
    // Available report formats
    'formats' => [
        'pdf',
        'excel',
        'csv',
    ],
    'storage_path' => storage_path('app/reports'), // Path to store generated reports
    'database_connection' => env('DB_CONNECTION', 'mysql'), // Database connection
];
