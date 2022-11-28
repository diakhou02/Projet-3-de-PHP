<?php
    require_once("model/rayon.model.php");
    $rayons=find_all_rayons();

    function find_all_ouvrage():array{
        $ouvrages=[
            ['id'=>'1','code'=>uniqid(),'titre'=>"L'Enfant Noir",'date'=>'1953'],
            ['id'=>'2','code'=>uniqid(),'titre'=>"Il Faut s'adapter",'date'=>'2019'],
            ['id'=>'3','code'=>uniqid(),'titre'=>"Parole d'éduc",'date'=>'2011'],
            ['id'=>'4','code'=>uniqid(),'titre'=>"La gauche,Les Noirs et Les Arabes",'date'=>'2010'],
            ['id'=>'5','code'=>uniqid(),'titre'=>"Le siècle Américain,Une histoire",'date'=>'2016'],
        ];
        return $ouvrages;
    }

    function find_all_ouvrage_by_categorie(string $categorie):array{
        $ouvragesByCategorie=[];
        $ouvrages=find_all_ouvrage();
        foreach ($ouvrages as $ouvrage) {
            if($ouvrage['categorie']=$categorie){
                $ouvragesByRayons[]=$ouvrage;
            }
        }
        return $ouvragesByRayons;
    }
?>