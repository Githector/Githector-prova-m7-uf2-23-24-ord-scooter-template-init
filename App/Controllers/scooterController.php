<?php


class scooterController extends Controller
{

    public function index()
    {
        //preparar i renderitzar vista ppal de patinets
        }


    public function destroy()
    {
        //Eliminar patinet
    }

    public function store()
    {
        //Mètode per crear un patinet

        //Recuperar la extensió de la imatge guardada:
                $array = explode(".", $_FILES['img']['name']);
                $extensio = $array[count($array) - 1];

            
        }
    }
    


