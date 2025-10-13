<?php

namespace BehavioralDesignPatterns\TemplateMethod;

class ImageCVReportGeneration extends CVReportGeneration
{
    protected function extractData($file): Data
    {
        echo "extracting data from an image...\n";
        return new Data();
    }
}