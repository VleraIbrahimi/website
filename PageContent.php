<?php

class PageContent {
    private $conn;
    private $table_name = "page_content";

    public function __construct($db) {
        $this->conn = $db;
    }

    public function getContent($page, $section) {
        $sql = "SELECT content_text FROM {$this->table_name} 
                WHERE page_name = :page AND section_name = :section LIMIT 1";

        $stmt = $this->conn->prepare($sql);
        $stmt->execute([
            ':page' => $page,
            ':section' => $section
        ]);

        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        return $row ? $row['content_text'] : '';
    }
}
