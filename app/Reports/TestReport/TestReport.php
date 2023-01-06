<?php
namespace App\Reports;

class TestReport extends \koolreport\KoolReport
{
    use \koolreport\codeigniter\Friendship;
    function setup()
    {
        $this->src("default")
        ->query("Select * from sites")
        ->pipe($this->dataStore("testReport"));        
        
    }
}