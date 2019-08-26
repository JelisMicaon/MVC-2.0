<?php
class notFoundController extends Controller {
    private $arrayInfo;

    public function __construct() {
        parent::__construct();
        // Guarda o nome do menu da página e o model do user.
        $this->arrayInfo = array();
    }

	public function index() {
		// loadTemplate -> precisa de 03 variaveis, 1º nome do arquivo, 2º Array de dados, 3º nome da pasta
		$this->loadTemplate('index', $this->arrayInfo, '404');
	}
}
?>