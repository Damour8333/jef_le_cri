<?php
function getAll($conn, $table) {
    $stmt = $conn->query("SELECT * FROM `$table`");
    return $stmt->fetch_all(MYSQLI_ASSOC);
}

function getPoems($conn) {
    $stmt = $conn->prepare("SELECT id, title, content, created_at FROM poems ORDER BY created_at DESC");
    if ($stmt) {
        $stmt->execute();
        return $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    }
    return [];
}

?>
