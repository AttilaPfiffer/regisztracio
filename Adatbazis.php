<?php
	class User{
		private $host="localhost";
		private $felhasznalonev="root";
		private $jelszo="";
		private $abNev="pizzahot";
		private $kapcsolat;
    
		//konstuktor
		public function __construct() {	
	
		//ékezetes betűk
		$this->kapcsolat->query("SET NAMES UTF8");
		}

		public function reg_felhasznalo($nev, $email, $jelszo){
			$jelszo = "SELECT jelszo FROM felhasznalo";

			//jelszó titkosítása
			//lekérdezem a felhasznalo adatai alapján, létezik-e már?
			//ha nem, felveszem/beszúrom a táblába az adatait; szerkesztő lesz alapból, és a bejelentkezett mező 0
				//visszatérek a lekérdezés eredményével (sikerült-e beszúrni)
			//különben hamis
		}

		
		public function bejelentkezes($emailNev, $jelszo){
			//jelszó titkosítása
			//lekérdezés: email vagy nev a megadott érték
			//ha már létezik, 
				//állítsuk be a login kulcsot a sessionben igazra,
				//hozzuk létre a felhAzon kulcsú sessiont,
					//segítség:  $result->fetch_array(MYSQLI_ASSOC);
				//módosítsuk a bejelentkezést 1-re! térjünk vissza igazzal!
			//különben hamissal térjünk vissza!
    	}

    	
    	public function get_nev($felhAzon){
    		//felhAzon alapján név visszaadása
			//$result->fetch_array(MYSQLI_ASSOC);
    	}
		
		public function adminE($felhAzon){
    		$select3 = "SELECT j.nev FROM jogosultsag as j
			INNER JOIN felhasznalo as f WHERE j.jogAzon = f.jogAzon and felhAzon = $felhAzon and j.nev = 'admin'";
			$result = $this -> lekerdezes($select3) -> num_rows;
			if ($result == 1) {
				return true;
			}
			return false;
    	}

	    public function kijelentkezes() {
			$felhAzon = $_SESSION['felhAzon'];
			if (isset($_GET['q'])) {
				$felhAzon -> kijelentkezes();
				header("location: login.php");
			}
	    }
		
		public function aktivok(){
			//lekérdezés
		}
		
		public function megjelenit_aktivok($matrix){
			//listázza az eredményt
		}

		public function get_session() {
			return $_SESSION['login'];
		}

	}
?>