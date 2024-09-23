<?php

// config for Elcomware/ReportMaster
return [

    'default' => [
        'template' => 'default',
        'format' => 'pdf', // Default format for reports (pdf, xlsx, csv)
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
