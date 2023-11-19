    <?php    
        $columns = '';
        foreach ($data as $key => $value) {
            $columns .= "`$key`=:$key, "; 
        }
        
        $columns = rtrim($columns, ', ');

        $sql = "UPDATE $table SET $columns WHERE $condition";

        $stmt = $this->conn->prepare($sql);

        foreach ($data as $key => $value) {
            $stmt->bindValue(':' . $key, $value);
        }

        foreach ($params as $key => $value) {
            $stmt->bindValue(':' . $key, $value);
        }

        return $stmt->e
        xecute();
        ?>