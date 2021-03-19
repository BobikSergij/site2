<?php

class AdminController{

    public function actionIndex(){

        require_once (ROOT. '/views/admin/admin_panel.php');
        return true;

    }

}