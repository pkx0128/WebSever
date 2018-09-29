<?php
    namespace app\ctr;
    class indexCtr extends \core\imooc {
        public function index(){

            $data =  "This is index!";
            $title = "这是一个view";
            $this->assign('title',$title);
            // echo $data;
            $this->assign('data',$data);
            $this->display('index.html');
        }
    }

?>