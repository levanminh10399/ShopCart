<?php
    class Home extends Controller{
        function Default(){
            $this->view("layout", ['view'=>'productView','page'=>1,'total'=>5]);
        }
    }
