<?php
class database
{
    public $que;
    private $servername = '192.168.64.2';
    private $username = 'root';
    private $password = '';
    private $dbname = 'zechphpbasic_db';
    private $result = array();
    private $mysqli = '';

    public function __construct()
    {
        $this->mysqli = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
    }

    public function insert($table, $para = array(), $last_id = 'N')
    {
        $table_columns = implode(',', array_keys($para));
        $table_value = implode("','", $para);

        $sql = "INSERT INTO $table($table_columns) VALUES('$table_value')";

        $result = $this->mysqli->query($sql) or die($this->mysqli->error);
        $lastId = $this->mysqli->insert_id;
        $ret_ = ($last_id == 'Y') ? $lastId : 1;
        return $result ? $ret_ : 0;
    }

    public function update($table, $para = array(), $id)
    {
        $args = array();

        foreach ($para as $key => $value) {
            $args[] = "$key = '$value'";
        }

        $sql = "UPDATE  $table SET " . implode(',', $args);

        $sql .= " WHERE $id";

        return $this->mysqli->query($sql) or die($this->mysqli->error);
    }

    public function delete($table, $id)
    {
        $sql = "DELETE FROM $table";
        $sql .= " WHERE $id ";
        $sql;
        return $this->mysqli->query($sql) or die($this->mysqli->error);
    }

    public $sql;

    public function select($table, $rows = "*", $where = null)
    {
        $sql = "SELECT $rows FROM $table";
        $inject = $where != null ? " WHERE $where" : "";

        $sql .= $inject;

        $item = $this->mysqli->query($sql) or die($this->mysqli->error);
        return mysqli_fetch_assoc($item);
    }

    public function selectLoop($table, $rows = "*", $where = null)
    {
        $sql = "SELECT $rows FROM $table";
        $inject = $where != null ? " WHERE $where" : "";

        $sql .= $inject;

        $item = $this->mysqli->query($sql) or die($this->mysqli->error);
        $result = array();
        while ($row = mysqli_fetch_assoc($item)) {
            $result[] = $row;
        }
        return $result;
    }

    public function encrypt($password, $algo = PASSWORD_DEFAULT)
    {
        return password_hash($password, $algo);
    }

    public function clean($slug)
    {
        if (is_string($slug)) {
            return filter_var($slug, FILTER_SANITIZE_STRING);
        } else {
            return $slug;
        }
    }

    public function __destruct()
    {
        $this->mysqli->close();
    }
}
