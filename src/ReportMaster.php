<?php

namespace Elcomware\ReportMaster;

use Barryvdh\DomPDF\Facade\Pdf;
use Maatwebsite\Excel\Facades\Excel;

class ReportMaster {

    protected string $title;

    protected array $data;
    protected string $template;

    public function create($title): static
    {
        $this->title = $title;
        return $this;
    }

    public function setData($data): static
    {
        $this->data = $data;
        return $this;
    }

    public function setTemplate($template): static
    {
        $this->template = $template;
        return $this;
    }

    public function generate(): string
    {
        return view("reportmaster::templates.{$this->template}", ['title' => $this->title, 'data' => $this->data])->render();
    }

    public function download($filename): \Illuminate\Http\Response
    {
        $pdf = PDF::loadHTML($this->generate());
        return $pdf->download($filename);
    }

    public function view(): string
    {
        return $this->generate();
    }

    public function print(): string
    {
        return $this->generate();
    }

    /**
     * @throws \Exception
     */
    public function export($format): \Symfony\Component\HttpFoundation\BinaryFileResponse
    {
        return match ($format) {
            'excel' => Excel::download(new ReportExport($this->data), "{$this->title}.xlsx"),
            'csv' => Excel::download(new ReportExport($this->data), "{$this->title}.csv"),
            default => throw new \Exception("Unsupported format: $format"),
        };
    }
}
