<?php
    namespace app\ctr;
    class indexCtr {
        public function index(){
            echo "This is index!";
            $modle = new \core\lib\model();
            $sql = 'select * from persons';
            $rel = $modle->query($sql);
            print_r($rel->fetchAll());
        }
    }

?>