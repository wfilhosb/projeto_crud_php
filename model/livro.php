<?php
    require_once(banco.php);
    class Livro extends Banco{
        private $cod;
        private $nome;
        private $autor;
        private $quantidade;
        private $preco;
        private $flag;
        private $data;

        public function setNome($nome){ //setar um valor para o atributo
            $this->nome = $nome;
        }
        public function getNome(){ //retornar o valor do atributo
            return $this->nome;
        }

        public function setAutor($autor){ //setar um valor para o atributo
            $this->autor = $autor;
        }
        public function getAutor(){ //retornar o valor do atributo
            return $this->autor;
        }

        public function setQuantidade($quantidade){ //setar um valor para o atributo
            $this->quantidade = $quantidade;
        }
        public function getQuantidade(){ //retornar o valor do atributo
            return $this->quantidade;
        }

        public function setPreco($preco){ //setar um valor para o atributo
            $this->preco = $preco;
        }
        public function getPreco(){ //retornar o valor do atributo
            return $this->preco;
        }

        public function setFlag($flag){ //setar um valor para o atributo
            $this->flag = $flag;
        }
        public function getFlag(){ //retornar o valor do atributo
            return $this->flag;
        }

        public function setData($data){ //setar um valor para o atributo
            $this->data = $data;
        }
        public function getData(){ //retornar o valor do atributo
            return $this->data;
        }

        public function setCod($cod){ //setar um valor para o atributo
            $this->cod = $cod;
        }
        public function getCod(){ //retornar o valor do atributo
            return $this->cod;
        }
    }
?>