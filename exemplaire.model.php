<?php
    function find_all_exemplaires():array{
        $exemplaires=[
            ['id'=>1,'code'=>uniqid(),'date'=>'23/08/2019'],
            ['id'=>2,'code'=>uniqid(),'date'=>'10/09/2022'],
            ['id'=>3,'code'=>uniqid(),'date'=>'08/09/2002'],
            ['id'=>4,'code'=>uniqid(),'date'=>'07/12/1969'],
            ['id'=>5,'code'=>uniqid(),'date'=>'22/05/1954'],
        ];
        return $exemplaires;
    }
?>