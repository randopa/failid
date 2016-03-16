<?php

     date_default_timezone_set('Europe/Tallinn');

     ini_set('display_errors',1);
     error_reporting(E_ALL);

     function loo($andmed) {
              $nimi = $andmed["nimi"];
              $tel = $andmed["tel"];
              $sex = $andmed["sex"];
              $muu = $andmed["muu"];
              $file = $andmed["pilt"];

              $akoht = "./kasutaja";
              $kaustad = glob($akoht . "/*", GLOB_ONLYDIR);
              if (count($kaustad) != 0) {
                     $hurricane = "";
                     foreach ($kaustad as $kaust) {
                           if (basename($kaust) > $hurricane)
                           {
                           $hurricane = basename($kaust);
                           }
                     }
                     $id = $hurricane + 1;
              }
              else { 
                     $id = 0;
              }

              $kaust = 'kasutaja/'.$id;
              if ( !file_exists($kaust) ){
                     $tee = umask(0);
                     mkdir ($kaust, 0777, true);
                     umask($tee);
              } 
            
              $aeg = time();

              $andmed = fopen($kaust.'/fill.json','w');
              $fill[] = array(
              "id" => $id,
              "nimi" => $nimi,
              "tel" => $tel,
              "sex" => $sex,
              "muu" => $muu,
              "aeg" => $aeg);

              move_uploaded_file($file, $kaust.'/pilt.jpg');
              fwrite($andmed, json_encode($fill));
              fclose($andmed);
     }

  function muuda($andmed) {
              $id = $andmed["id"];
              $nimi = $andmed["nimi"];
              $tel = $andmed["tel"];
              $sex = $andmed["sex"];
              $muu = $andmed["muu"];
              $aeg =time();
              $file = $andmed["pilt"];     
              
              $akoht = "./kasutaja/$id";

              $andmed = fopen($akoht.'/fill.json','w');
              $fill[] = array(
                      "id" => $id,
                      "nimi" => $nimi,
                      "tel" => $tel,
                      "sex" => $sex,
                      "muu" => $muu,
                      "aeg" => $aeg);

              move_uploaded_file($file, $akoht.'/pilt.jpg');
              fwrite($andmed, json_encode($fill));
              fclose($andmed);
  }

  function vaata($id) {
    $dataPath = "./kasutaja/$id/fill.json";
    $json = file_get_contents($dataPath);
    $andmed = json_decode($json, true);
      $andmed = $andmed[0];
    $andmed["aeg"] = strftime("%d/%m/%Y %H:%M", $andmed["aeg"]);
    return $andmed;
  }

  function eemalda() {
    $reganud = [];
    $i = 0;
    
    foreach (glob('./kasutaja/*', GLOB_ONLYDIR) as $kasutaja) {
               $id = filter_var($kasutaja, FILTER_SANITIZE_NUMBER_INT);
               $reganud[$i] = vaata($id);
               $i++;
    }
    return $reganud;
  }

  function delete($id) {
    $akoht = "./kasutaja/$id";
    if (is_dir($akoht)) {
      $files = glob($akoht . "/*");
      foreach ($files as $file) {
        unlink($file);
      }
      rmdir($akoht);
    }
  }
?>
