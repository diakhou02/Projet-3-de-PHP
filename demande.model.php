<?php
    function find_all_demandes():array{
        $demandes=[
            ['id'=>1,'statut'=>'En Cours'],
            ['id'=>2,'statut'=>'Annulée'],
            ['id'=>1,'statut'=>'Retournée'],
            ['id'=>1,'statut'=>'Validée'],
        ];
        return $demandes;
    }
?>