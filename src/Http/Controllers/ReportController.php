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
        $title = $request->input('title');
        $data = $request->input('data');
        $template = $request->input('template', config('reportmaster.default_template'));

        $report = ReportMaster::create($title)
            ->setData($data)
            ->setTemplate($template)
            ->generate();

        return response()->json(['report' => $report]);
    }

    public function download(Request $request, $format)
    {
        $title = $request->input('title');
        $data = $request->input('data');
        $template = $request->input('template', config('reportmaster.default_template'));

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
        $title = $request->input('title');
        $data = $request->input('data');
        $template = $request->input('template', config('reportmaster.default_template'));

        $report = ReportMaster::create($title)
            ->setData($data)
            ->setTemplate($template)
            ->view();

        return response($report);
    }
}
