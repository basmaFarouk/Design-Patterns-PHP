<?php

namespace TemplateMethod;


// Usage example
$pdfReport = new PdfCVReportGeneration();
$pdfReport->generateCVReport("resume.pdf");

$wordReport = new WordCVReportGeneration();
$wordReport->generateCVReport("resume.docx");

$imageReport = new ImageCVReportGeneration();
$imageReport->generateCVReport("resume.jpg");