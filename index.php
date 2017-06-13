<?php

/**
 * 
 * 4 disques sur 1 - 0 sur 2 - 0 sur 3
 * 
 * 3 disques sur 1 - 0 sur 2 - 1 sur 3
 * 
 * 2 disques sur 1 - 1 sur 2 - 1 sur 3
 * 
 * 2 disques sur 1 - 2 sur 2 - 0 sur 3
 * 
 * 1 disque sur 1 - 2 sur 2 - 1 sur 3
 * 
 * 2 disques sur 1 - 1 sur 2 - 1 sur 3
 * 
 * 2 disques sur 1 - 0 sur 2 - 2 sur 3
 * 
 * 1 disque sur 1 - 0 sur 2 - 3 sur 3
 * 
 * 0 disque sur 1 - 1 sur 2 - 3 sur 3
 * 
 * 0 disque sur 1 - 2 sur 2 - 2 sur 3
 * 
 * 1 disque sur 1 - 2 sur 2 - 1 sur 3
 * 
 * 2 disques sur 1 - 1 sur 2 - 1 sur 3
 * 
 * 2 disques sur 1 - 2 sur 2 - 0 sur 3
 * 
 * 1 disque sur 1 - 2 sur 2 - 1 sur 3
 * 
 * 0 disque sur 1 - 3 sur 2 - 1 sur 3
 * 
 * 0 disque sur 1 - 4 sur 2 - 0 sur 3
 * 
 * Fonction permettant de résoudre la tour d'Hanoi
 * @param type $nbDisque
 * @param type $pile1 pile de départ
 * @param type $pile2 pile de destination
 * @param type $pile3 pile intermediraire
 */
function tourHanoi($nbDisque, $pile1, $pile2, $pile3){

    if($nbDisque == 1){
        echo "On déplace le disque de la pile ".$pile1." vers la pile ".$pile2."<br/>";
    } else {
        //On déplace nbDisque-1 de la pile 1 vers la pile 3 en passant par la pile 2
        tourHanoi($nbDisque-1,$pile1, $pile3, $pile2);
        // On déplace un disque de la pile 1 vers la pile 2
        tourHanoi(1, $pile1, $pile2, $pile3);
        //On déplace nbDisque-1 de la pile3 vers la pile 2 en passant par la pile 1
        tourHanoi($nbDisque-1,$pile3, $pile2, $pile1);
    }
}

tourHanoi(30,1,2,3);