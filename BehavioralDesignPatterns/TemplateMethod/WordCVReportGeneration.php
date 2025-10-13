<?php

namespace BehavioralDesignPatterns\TemplateMethod;

class WordCVReportGeneration extends CVReportGeneration
{
    protected function extractData($file): Data
    {
        echo "extracting data from word file\n";
        return new Data();
    }
}