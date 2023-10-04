<?php
function selectProfessors() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT professor_id, professor_name, professor_class FROM `professor`");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
