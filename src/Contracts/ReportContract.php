<?php

namespace Elcomware\ReportMaster\Contracts;

use Illuminate\Http\Request;

interface ReportContract
{
    public function generate(Request $request): \Illuminate\Http\JsonResponse;

    public function download(Request $request, $format);

    public function view(Request $request): \Illuminate\Foundation\Application|\Illuminate\Http\Response|\Illuminate\Contracts\Routing\ResponseFactory;
}
