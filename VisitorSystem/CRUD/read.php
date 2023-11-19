    <?php
        $sql = "SELECT * FROM $table";

        if (!empty($condition)) {
            $sql .= " WHERE $condition";
        }

        $stmt = $this->conn->prepare($sql);
        $stmt->execute($params);

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    ?>