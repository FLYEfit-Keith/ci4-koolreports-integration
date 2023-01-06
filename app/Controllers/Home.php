<?php

namespace App\Controllers;

require APPPATH . "Reports/TestReport/TestReport.php";

class Home extends BaseController
{
    public function index()
    {
        //This displays the TestReport
        // url = https://localhost/ [see app/Config/Routes.php]

        $report = new \App\Reports\TestReport();
        $report->run();
        $data['report'] = $report;

        echo view('page_shell/header');
        echo view('reports/showReport', $data);
        echo view('page_shell/footer');
    }
    public function testReport2()
    {
        //This displays the TestReport2
        // url = https://localhost/Testreport2 [see app/Config/Routes.php]

        $report = new \App\Reports\TestReport();
        $report->run();
        $data['report'] = $report;

        echo view('page_shell/header');
        echo view('reports/showReport', $data);
        echo view('page_shell/footer');
    }
}
