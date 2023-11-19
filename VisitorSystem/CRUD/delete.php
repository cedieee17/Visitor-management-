    <?php    
        $sql = "DELETE FROM `$table` WHERE $condition";

        $stmt = $this->conn->prepare($sql);

        foreach ($params as $key => $value) {
            $stmt->bindValue(':' . $key, $value);
        }

        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    ?>