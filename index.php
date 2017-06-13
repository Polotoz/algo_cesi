<?php



/**
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

tourHanoi(4,1,2,3);