<!doctype html>
<html lang="en" xmlns:x-report="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<h1>this is reports</h1>

{{--<x-report-button groupBorder="30" :$buttons />--}}
<x-report-button-container groupBorder="1" hasShadow>
   <x-report-button-item label="print" printer  path="{{route('report.print')}}" size="30"/>
   <x-report-button-item label="download" downloader path="{{route('report.download',['format'=>'pdf'])}}"/>
   <x-report-button-item label="export" exporter path="{{route('report.download',['format'=>'excel'])}}"/>
</x-report-button-container>
</body>
</html>
