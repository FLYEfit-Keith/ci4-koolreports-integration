<?php

namespace koolreport\codeigniter;

use \koolreport\core\Utility;

trait Friendship
{
    public function __constructFriendship()
    {

        //assets folder
        $assets = Utility::get($this->reportSettings, "assets");
        if ($assets == null) {
            $document_root = Utility::getDocumentRoot();
            $script_folder = str_replace("\\", "/", realpath(dirname($_SERVER["SCRIPT_FILENAME"])));
//            $asset_path = $script_folder . "/assets";
            $asset_path = $script_folder;
//            $asset_url = Utility::strReplaceFirst($document_root, "", $script_folder) . "/assets";
            $asset_url = Utility::strReplaceFirst($document_root, "", $script_folder);
            if (!is_dir($asset_path . "/koolreport_assets")) {
                if (!is_dir($asset_path)) {
                    mkdir($asset_path, 0755);
                }
                mkdir($asset_path . "/koolreport_assets", 0755);
            }

            $assets = array(
                "url" => $asset_url . "/koolreport_assets",
                "path" => $asset_path . "/koolreport_assets",
            );
            $this->reportSettings["assets"] = $assets;
        }

        //If codeigniter 4 then load default database <====
        if(file_exists(APPPATH . 'Config/App.php')){
                $db = \Config\Database::connect();
                $dataSources = array(
                   "default"=>array(
                       "connectionString"=>"mysql:host=$db->hostname;dbname=$db->database",
                       "username"=>$db->username,
                       "password"=>$db->password,
                        "charset"=>$db->charset
                      ),
                  );
                $this->reportSettings["dataSources"] = $dataSources; 
        }
        return;        
        //////////////end CI4//////////////

    }
}