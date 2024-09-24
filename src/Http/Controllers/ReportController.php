<?php

namespace Elcomware\ReportMaster\Http\Controllers;

use Elcomware\ReportMaster\Contracts\ReportContract;
use Illuminate\Http\Request;
use Elcomware\ReportMaster\Facades\ReportMaster;
use Illuminate\Routing\Controller;

class ReportController extends Controller implements ReportContract
{
    public function generate(Request $request): \Illuminate\Http\JsonResponse
    {
        /*$title = $request->input('title');
        $data = $request->input('data');*/
        $title = 'Report Title'; //$request->input('title');
        $data = [
            ['name' => 'John Doe', 'email' => 'john@example.com'],
            ['name' => 'Jane Doe', 'email' => 'jane@example.com'],
        ];;//$request->input('data');
        $template = $request->input('template', config('reportmaster.defaults.template'));

        $report = ReportMaster::create($title)
            ->setData($data)
            ->setTemplate($template)
            ->generate();

        return response()->json(['report' => $report]);
    }

    public function   download(Request $request, $format)
    {
       /* $title = $request->input('title');
        $data = $request->input('data');*/
        $title = 'Report Title'; //$request->input('title');
        $data = [
            ['name' => 'John Doe', 'email' => 'john@example.com'],
            ['name' => 'Jane Doe', 'email' => 'jane@example.com'],
        ];;//$request->input('data');
        $template = $request->input('template', config('reportmaster.defaults.template'));

        $report = ReportMaster::create($title)
            ->setData($data)
            ->setTemplate($template);

        return match ($format) {
            'pdf' => $report->download('report.pdf'),
            'excel' => $report->export('excel'),
            'csv' => $report->export('csv'),
            default => response()->json(['error' => 'Invalid format'], 400),
        };
    }

    public function view(Request $request): \Illuminate\Foundation\Application|\Illuminate\Http\Response|\Illuminate\Contracts\Routing\ResponseFactory
    {

        $title = 'Report Title'; //$request->input('title');
        $data = [
            ['name' => 'John Doe', 'email' => 'john@example.com'],
            ['name' => 'Jane Doe', 'email' => 'jane@example.com'],
        ];;//$request->input('data');
        $template = $request->input('template', config('reportmaster.defaults.template'));

        $report = ReportMaster::create($title)
            ->setData($data)
            ->setTemplate($template)
            ->view();

        return response($report);
    }


}
