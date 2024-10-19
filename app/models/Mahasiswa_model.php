<?php

class Mahasiswa_model {
/*
	private $mhs = array(
		array(
			"nama" => "Haidar Ali",
			"nrp" => "223040093",
			"email" => "haidar.223040093@mail.unpas.ac.id",
			"jurusan" => "Teknik Informatika"
		),
		array(
			"nama" => "Bla Bla Bla",
			"nrp" => "123456789",
			"email" => "blablabla.123456789@mail.unpas.ac.id",
			"jurusan" => "Entah",
		)
	);
*/
	private $dbh, $stmt;

	public function __construct() {
		$this->initDB();
		$dsn = 'mysql:host=localhost;dbname=phpmvc';

		try {
			if (php_uname('s') == 'Linux') {
					$this->dbh = new PDO($dsn, "ocak", "");
			} else if (php_uname('s') == 'Windows NT') {
					$this->dbh = new PDO($dsn, "root", "");
			}
		} catch(PDOException $e) {
			die($e->getMessage());
		}
	}

	public function getAllMahasiswa() {
		$this->stmt = $this->dbh->prepare('SELECT * FROM Mahasiswa');
		$this->stmt->execute();
		return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
	}

	private function initDB() {
        $command;

        if (php_uname('s') == 'Linux') {
            $command = "mariadb -h 'localhost' -u 'ocak' -p'' < '/home/peano/nb/akdmk/kbm/smt5/pw/prakweb_2024_C_223040093_MVC/app/models/initDB.sql'";
        } else if (php_uname('s') == 'Windows NT') {
            $command = "mysql -h localhost -u 'root' -p < \"D:\akdmk\kbm\smt5\pw\prakweb_2024_C_223040093_MVC\app\models\initDB.sql\"";
        }
		
        shell_exec($command);
    }
}

?>
