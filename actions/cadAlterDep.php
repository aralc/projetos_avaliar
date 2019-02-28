<?php
include('../class/classDepartamentos.php');



$custo = isset($_POST['DepCC']) ? $_POST['DepCC'] : null;
$alternativa = isset($_POST['DepAlt']) ? $_POST['DepAlt'] : null;

$del = isset($_GET['del']) ? $_GET['del'] : null;
$custoDel = isset($_GET['id']) ? $_GET['id'] : null;


if ($del <> null)
{
    $dep = new Departamnetos();
    $dep->deleteAlternarivo(trim($custoDel));
        
    
    
}
else 
{

if (($custo <> null) && ($alternativa <> null))
    {
        
        $dep = new Departamnetos();
        $alt = $dep->getAlternativos($custo);
        
        if ($alt != false )
        {
            //echo count($alt);
            var_dump($alt);
            $dep->alterAlternativo($custo, $alternativa);
        } else 
            {
                //echo count($alt);
                $dep->createAlternativo($custo, $alternativa);
            }
        
        
        
    }

}
?>