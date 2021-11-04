<?php 

    require_once "koneksi.php";
    class News{
        public function get_all_news(){
            global $db;
            $query="SELECT * FROM news";
            $data=array();
            $result=mysqli_query($db, $query);

            while($row=mysqli_fetch_object($result))
            {
                $data[]=$row;
            }

            $response=array(
                            'status' => 200,
                            'message' =>'Get Data Successfully. 2',
                            'data' => $data
                        );
            header('Content-Type: application/json');
            echo json_encode($response);

        }

        public function get_news($id=0){
            global $db;
            $query="SELECT * FROM news";
            if($id != 0){
                $query.=" WHERE id=".$id." LIMIT 1";
            }
            $data=array();
            $result=mysqli_query($db, $query);

            while($row=mysqli_fetch_object($result))
            {
                $data[]=$row;
            }

            $response=array(
                            'status' => 200,
                            'message' =>'Get Data Successfully.',
                            'data' => $data
                        );
            header('Content-Type: application/json');
            echo json_encode($response);

        }
    }

?>