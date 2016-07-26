<?php
class NightsWatch {
	private $_crew;
	public function __construct() {
		$this->_crew = array();
	}
	public function recruit($who) {
		$this->_make_crew($who);
	}
	public function fight() {
		$crew = $this->get_crew();
		foreach ($crew as $fighter)
			if (array_key_exists("IFighter", class_implements($fighter)))
				$somebody->fight();
	}
	private function get_crew() {
		return $this->_crew;
	}
	private function _make_crew($who) {
		array_push($this->_crew, $who);
	}
}
?>
