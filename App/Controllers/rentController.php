<?php 

    class rentController extends Controller{
            
            public function store(){

                #Exemple de lloguer
                $rent = [
                    'id' => //id de lloguer,
                    'id_scooter' => //id del patinet associat
                    'user' => //usuari que lloga
                    'start' => //datetime inici lloguer
                    'end' => //Fi de lloguer (null si no ha acabat)
                ];

            }

            public function finish(){
                //Mètode per finalitzar un lloguer

            }


            public function index(){
                //Mètode per renderitzar la vista de lloguers

            }

    }

?>