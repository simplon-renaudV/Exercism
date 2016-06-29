<?php
	function word_count($phraseTest) {

		//$phraseTest = preg_replace("/[_+-.,!@#$%^&*();\/|<>'?=:]/", " ", $phraseTest);
		$tabChaine = explode(" ", $phraseTest);
		$tabMots = [];

		for ($i=0; $i<count($tabChaine); $i++) {
			if (count($tabMots) == 0) {
				$tabMots[$tabChaine[$i]] = 1;
			}
			else {
	
				foreach($tabMots as $mot=>$nbre) {
					if ($tabChaine[$i] == $mot) {
						$tabMots[$mot]++;
					}
					if (!isset($nbre)) {
						$tabMots[$tabChaine[$i]] = 1;
					}
				}
			}
		}
	
		return $tabMots;

	}

	var_dump(word_count("testing pohkh testing"));