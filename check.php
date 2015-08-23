<?php
require_once './includes/page.php';

class Check {
    public function run($name) {
        // validate user input
        if (strlen($name) > 16 || !preg_match("/^[0-9a-zA-Z_]{1,16}$/", $name)) {
            $this->println("Invalid name.");
            return;
        }
        $page = new Page(false);
        $history = $page->settings->table_history;

        try {
            $stmt = $page->conn->prepare("SELECT name,uuid FROM $history WHERE name=? ORDER BY date LIMIT 1");
            if ($stmt->execute(array($name))) {
                if ($row = $stmt->fetch()) {
                    $name = $row['name'];
                    $uuid = $row['uuid'];
                }
            }
            if (!isset($uuid)) {
                $name = htmlspecialchars($name, ENT_QUOTES, 'UTF-8');
                $this->println("$name has not joined before.");
                return;
            }
            $table = $page->settings->table_bans;

            $stmt = $page->conn->prepare("SELECT * FROM $table WHERE (uuid=? AND active=" . Settings::$TRUE . ") LIMIT 1");
            if ($stmt->execute(array($uuid))) {
                if (!($row = $stmt->fetch())) {
                    $this->println("$name is not banned.");
                    return;
                }
                $banner = $page->get_banner_name($row);
                $reason = $page->clean($row['reason']);
                $time = $page->millis_to_date($row['time']);
                $until = $page->millis_to_date($row['until']);

                $this->println("$name is banned!");
                $this->println("Banned by: $banner");
                $this->println("Reason: $reason");
                $this->println("Banned on: $time");
                if ($row['until'] > 0) {
                    $this->println("Banned until: $until");
                } else {
                    $this->println("Banned permanently.");
                }
            }
        } catch (PDOException $ex) {
            die($ex->getMessage());
        }
    }

    function println($line) {
        echo "$line<br>";
    }
}

if (isset($_POST['name'], $_POST['table'])) {
    $check = new Check();
    $check->run($_POST['name']);
}
?>
