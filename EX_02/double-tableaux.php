<?php
$panier= array(
    array('T-shirt rouge',15.50,5,),
    array('Tshirt vert',15.50,6),
    array('Tshirt argent',15.50,6),
    array('Short bleu',16.50,5),
    array('Short vert',19.99,10),
    array('Veste argent',19.99,10),
    array('Veste argent',35,3)
);

function afficher_panier($panier){
    foreach($panier as $element){
echo '<ul> </ul>';
        foreach($element as $data)
        echo '<li>'.$data.'</li>'
        ;
    }
}; 
afficher_panier($panier);

function calculer_total_panier($panier){
    $somme=0;
    foreach($panier as $element){
        $somme=$element[1]*$element[2]+$somme;
            };
    return($somme);
    
};

echo calculer_total_panier($panier);
?>