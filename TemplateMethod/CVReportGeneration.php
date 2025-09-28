<?php

namespace TemplateMethod;

abstract class CVReportGeneration
{
    public function generateCVReport(string $cvFilePath): GeneratedReport
    {
        $file = $this->readFile($cvFilePath);
        $extractedData = $this->extractData($file);
        $analyzedData = $this->analyzeData($extractedData);
        return $this->generateReportOf($analyzedData);
    }

    abstract protected function extractData($file): Data;

    private function readFile(string $filePath): mixed
    {
        echo "reading file from: $filePath\n";
        return null;
    }

    private function analyzeData(?Data $data): ?AnalyzedData
    {
        echo "analyzing data...\n";
        return null;
    }

    private function generateReportOf(?AnalyzedData $analyzedData): GeneratedReport
    {
        echo "generating report...\n";
        return new GeneratedReport(true);
    }
}
