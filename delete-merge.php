<?php
      require "api-merge.php";
      
      deleteUser($_GET["id"]);
      header("Location:http://robert.vkhk.ee/~rando.pallon/kool/III/htmljaphp/katse/merge/all-merge.php");
      die(); 
