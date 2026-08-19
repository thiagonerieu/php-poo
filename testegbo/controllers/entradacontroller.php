<?php
namespace App\Controllers;

use App\Models\Entrada;

class EntradaController {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    // Função acionada quando o formulário é enviado via POST
    public function armazenar() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $model = new Entrada($this->db);

            $dados = [
                'livro_id'   => $_POST['livro_id'],
                'numero'     => $_POST['numero_entrada'],
                'texto'      => $_POST['conteudo'],
                'e1_texto'   => $_POST['escolha_1_texto'],
                'e1_destino' => $_POST['escolha_1_destino'],
                'e2_texto'   => $_POST['escolha_2_texto'],
                'e2_destino' => $_POST['escolha_2_destino']
            ];

            if ($model->salvar($dados)) {
                // Redireciona de volta com uma mensagem de sucesso
                header("Location: /?sucesso=1");
                exit;
            }
        }
    }
}
