<?php

include "model/model.php";

class Controller_app
{
    private $model;

    public function __construct()
    {
        $this->model = new Model_app();

    }

    public function execute_app()
    {

            if(isset($_POST['Accueil']))
            {  
                $query = 
                "
                    select type_mat, mark,quantite,desc_mat from material
                ";
                $result = $this->model->all_query($query,"select");
                $table_row = "";
                if ($result != 0)
                {
                    $count = 1;
                    foreach ($result as $key => $value) {
                        $table_row .= "
                        <tr>
                            <th scope='row'>$count</th>
                            <td>$value->type_mat</td>
                            <td>$value->mark</td>
                            <td>$value->quantite</td>
                            <td>$value->desc_mat</td>
                            <td col='2' class='text-center'>
                                <a class='btn btn-outline-danger'href='#' >supprimer</a>
                                <a class='btn btn-outline-success'href='#' >modifer</a>
                            </td>

                        </tr>
                        ";
                        $count++;
                    }
                   
                } else {
                    $table_row .= "<tr>
                                        <td>pas de result</td>
                                 </tr>";
                  
                }

                include "view/header.php";
                include "view/list.php";
                include "view/footer.html";
            } 
            elseif(isset($_POST['Contact_for']))
            {  
                $query = 
                "
                    select * from fourniseurs
                ";
                $result = $this->model->all_query($query,"select");
                $table_row_f = "";
                if ($result != 0)
                {
                    $count = 1;
                    foreach ($result as $key => $value) {
                        $table_row_f .= "
                        <tr>
                            <th scope='row'>$count</th>
                            <td>$value->nom_Fourniseurs</td>
                            <td>$value->address</td>
                            <td>$value->phone</td>
                            <td class='text-center'>
                                <a class='btn btn-outline-danger'href='#' >supprimer</a>
                            </td>
                        </tr>
                        ";
                        $count++;
                    }
                   
                } else {
                    $table_row .= "<tr>
                                        <td>pas de result</td>
                                 </tr>";
                  
                }
                include "view/header.php";
                include "view/contact.php";
                include "view/footer.html";
            } 
            
            elseif(isset($_POST['Ajouter_mat']))
            {  
                include "view/header.php";
                include "view/Add.php";
                include "view/footer.html";
            } 
            
            elseif(isset($_POST['Add_for']))
            {  
                include "view/header.php";
                include "view/add-Forniseurs.php";
                include "view/footer.html";
            } 
            
            elseif(isset($_POST['btn_add_forns']))
            {  

                $name = $_POST['name'];
                $adress = $_POST['adress'];
                $phone = $_POST['phone'];
                

                $query = "
                insert into 
                Fourniseurs(nom_Fourniseurs,address,phone) 
                values('$name', '$adress', '$phone')";

                $result = $this->model->all_query($query,"insert");
                $alert = "";

                if ($result == 1) 
                    $alert =  "<script> alert('Fourniseurs A Ete Ajouter') </script>";
                 else
                    $alert =  "<script> alert('Fourniseurs Non Ajouter') </script>";

                echo $alert;
                include "view/header.php";
                include "view/add-Forniseurs.php";
                include "view/footer.html";
            } 
            
           elseif(isset($_POST['delete_for']))
            {  
                include "view/header.php";
                // include "view/Add.php";
                echo "delete page forniseurs";
                include "view/footer.html";
            }  
           elseif(isset($_POST['btn_add_mat']))
            {  
                $type_mat = $_POST['type_mat'];
                $Mark = $_POST['Mark'];
                $Ref = $_POST['Ref'];
                $Qte = $_POST['Qte'];
                $Prix_achat = $_POST['Prix_achat'];
                $Prix_vent = $_POST['Prix_vent'];
                $desc = $_POST['desc'];

                $query = "
                insert into 
                material(type_mat,Mark,References_mat,Quantite,Prix_achat,Prix_vente,Desc_mat) 
                values('$type_mat', '$Mark', '$Ref', '$Qte', '$Prix_achat', '$Prix_vent', '$desc')";

                $result = $this->model->all_query($query,"insert");
                $alert = "";

                if ($result == 1) 
                    $alert =  "<script> alert('Materile A Ete Ajouter') </script>";
                 else
                    $alert =  "<script> alert('Materile Non Ajouter') </script>";

                echo $alert;
                include "view/header.php";
                include "view/Add.php";
                include "view/footer.html";

            }  
            
            else 
            {
                include "view/header.php";
                include "view/login.php";
                include "view/footer.html";
            }

    }
}