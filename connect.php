<?php
        $HOST = "your_host";
        $BANCO = "database_name"; //nome do banco de dados
        $USUARIO = "user_name"; // 
        $SENHA = "database_password";

        $conn = new PDO("mysql:host=" . $HOST . ";dbname=" . $BANCO . ";charset=utf8", $USUARIO, $SENHA);
        
   

  
    $mysql_data = json_decode(file_get_contents("php://input"));
    $data = array();
    if($mysql_data->action == 'fetchall'){
        $sql = "SELECT id, value1, value2 FROM your_tab_name ORDER BY id DESC";
        $stm = $conn->prepare($sql);
        $stm->execute();
    while($row = $stm->fetch(PDO::FETCH_ASSOC))
    {
        $data[] = $row;
    }
    echo json_encode($data);
    }
    
    
?>
