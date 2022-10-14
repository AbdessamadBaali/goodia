<?php



include 'ConnectionDB.php';
class Model_app extends Database
{

    public function all_query($query,$type)
    {
        try {
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          
            $stat = $this->conn->prepare($query);
            $stat->execute();

            // Check query type
            $type_query = ['insert', 'update', 'delete'];
            if( in_array($type, $type_query) )
            {
                if($stat) return 1;
                else return 0;

            } else 
            {
                $result = $stat->fetchAll(PDO::FETCH_OBJ);

                if(count($result) > 0) return $result;
                else return 0;
            }
           
        } catch (\Throwable $th) {

            print_r($th->getMessage());

        }       
    }

}