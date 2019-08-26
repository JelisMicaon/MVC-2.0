<?php
class Language {
	private $l;
	private $ini;

	public function __construct() {
		global $config;
		$this->l = $config['default_lang'];

		if(!empty($_SESSION['lang']) && file_exists('lang'.D_S.$_SESSION['lang'].'.ini')) {
			$this->l = $_SESSION['lang'];
		}

		$this->ini = parse_ini_file('lang'.D_S.$this->l.'.ini');
	}

	// MOSTRA A PALAVRA BUSCADA OU DA UM RETURN
	public function get($word, $return = false) {
		$text = $word;

		if(isset($this->ini[$word])) {
			$text = $this->ini[$word];
		}

		if($return) {
			return $text;
		} else {
			echo $text;
		}
	}

	// MOSTRA O PAIS SELECIONADO OU RETORNA A SIGLAS DO IDIOMA
	public function GetLang($return = false) {
        if(!$return){
	        switch ($this->l) {
	            case 'pt-br':
	                $this->get('BRASIL');
	                break;
	            case 'es-es':
	                $this->get('ESPANHA');
	                break;
	            case 'pt-pt':
	                $this->get('PORTUGAL');
	                break;
	            case 'en-us':
	                $this->get('EUA');
	                break;
	            default:
	                $this->get('BRASIL');
	                break;
	        }
        } else {
        	return $this->l;
        }
    }
}