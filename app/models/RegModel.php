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

    public function delete($id)
    {
        // Prepare Query
        $this->db->query('DELETE FROM admissions WHERE id = :id');

        // Bind Values
        $this->db->bind(':id', $id);

        //Execute
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    // Is Admitted
    public function admit($id)
    {
        // Prepare Query
        $this->db->query('UPDATE admissions SET is_admitted = :is_admitted WHERE id = :id');

        // Bind Values
        $this->db->bind(':id', $id);
        $this->db->bind(':is_admitted', '1');

        //Execute
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
