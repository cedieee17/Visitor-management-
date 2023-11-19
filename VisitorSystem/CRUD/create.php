    <?php  
        $columns = join('`, `', array_keys($data));
        $values = ':' . join(', :', array_keys($data));
        $sql = "INSERT INTO `$table` (`$columns`) VALUES ($values)";

        $stmt = $this->conn->prepare($sql);

        foreach ($data as $key => $value) {
            $stmt->bindValue(':' . $key, $value);
        }

        if ($stmt->execute()) {
            return true;
        } else {
        return false;
        }
    ?>