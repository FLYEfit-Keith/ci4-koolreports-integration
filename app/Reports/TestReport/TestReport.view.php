<?php
    use \koolreport\datagrid\DataTables;
 
    DataTables::create(array(
        "dataStore"=>$this->dataStore('testReport')
        ,"cssClass"=>array(
            "table"=>"table table-hover table-bordered",
            "th"=>"cssHeader",
            "tr"=>"cssItem"
            )
        ,"options"=>array(
                    "paging"=>true,
                    "searching"=>true,
                    "colReorder"=>true,
                    "fixedHeader"=>true,
                    "select"=>true,
                    "info"=>false,
            )
    ));
?>