<?php

namespace BehavioralDesignPatterns\TemplateMethod;

class PdfCVReportGeneration extends CVReportGeneration
{
    protected function extractData($file): Data
    {
        echo "extracting data from PDF\n";
        return new Data();
    }
}