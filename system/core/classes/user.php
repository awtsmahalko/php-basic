<?php

class user extends database
{
    private $table = 'tbl_users';
    public function addUser($username, $password)
    {
        $form = array(
            'username'      => $this->clean($username),
            'password'      => $this->encrypt($password),
            'user_status'   => 0
        );
        return $this->insert($this->table, $form, 'Y');
    }

    public function fetchUsers()
    {
        return $this->selectLoop($this->table);
    }

    public function editUser($user_id)
    {
        $form = array(
            'username'      => 'b',
            'password'      => $this->encrypt('b'),
            'user_status'   => 1
        );
        return $this->update($this->table, $form, "user_id = '$user_id'");
    }

    public function deleteUser($user_id)
    {
        return $this->delete($this->table, "user_id = '$user_id'");
    }
}
