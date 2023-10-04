<?php
function selectClassesByProfessor($pid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT c.class_id, class_number, class_description, semester, room, day_time FROM `class` c join section s on s.class_id = c.class_id where s.professor_id=?");
       $stmt->bind_param("i", $pid);
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
