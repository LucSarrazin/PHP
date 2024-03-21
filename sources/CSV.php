<?php
namespace Enc ;
class CSV
{

    public static function read($csv)
    {
        $file = fopen($csv, 'r');
        $line[] = fgetcsv($file, 1024, ";");
        $eleve = new Eleve($line[0][0],$line[0][1]) ;
        print_r($eleve) ;
        return $eleve ;
       /* while (!feof($file)) {
            $line[] = fgetcsv($file, 1024);
        }
        fclose($file);
        return $line;*/
    }
}