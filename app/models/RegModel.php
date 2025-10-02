<?php
class RegModel
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    // Fetch all registered users
    public function getAllRegistrations()
    {
        $this->db->query("SELECT * FROM admissions ORDER BY created_at DESC");
        return $this->db->resultSet(); // fetch multiple rows
    }

    public function getRegistrationById($id)
    {
        $this->db->query("SELECT * FROM admissions WHERE id = :id");
        $this->db->bind(':id', $id);
        return $this->db->single(); // fetch one row
    }
}
