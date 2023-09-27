<?php 
    function AuthComum(){
        if(isset($_POST['enviar-cadastro'])){
            echo # ; //tela de erro
            /* DADOS DE CADASTRO DE CLIENTE 
            nome , sobrenome , cpf , data , sexo , nomeMaterno , telCelular , telFixo , endereco , login , senha */
            
            //filters(validate e sanitize)
            $nome = filter_input(INPUT_POST , 'nome' , FILTER_SANITIZE_SPECIAL_CHARS);
            $nome = filter_input(INPUT_POST , 'nome' , FILTER_SANITIZE_STRING);

            $sobrenome = filter_input(INPUT_POST , 'sobrenome' , FILTER_SANITIZE_SPECIAL_CHARS);
            $sobrenome = filter_input(INPUT_POST , 'sobrenome' , FILTER_SANITIZE_STRING);

            $cpf = filter_input(INPUT_POST , 'cpf' , FILTER_SANITIZE_SPECIAL_CHARS);
            $cpf = filter_input(INPUT_POST, 'cpf' , FILTER_SANITIZE_STRING);

            $data = filter_input(INPUT_POST , 'data' , FILTER_SANITIZE_SPECIAL_CHARS);
            $data = filter_input(INPUT_POST, 'data' , FILTER_SANITIZE_STRING);

            $sexo = filter_input(INPUT_POST, 'sexo' , FILTER_VALIDATE_BOOLEAN);

            $nomeMaterno = filter_input(INPUT_POST , 'nomeMaterno' , FILTER_SANITIZE_SPECIAL_CHARS);
            $nomeMaterno = filter_input(INPUT_POST, 'nomeMaterno', FILTER_SANITIZE_NUMBER_INT);

            $telCelular = filter_input(INPUT_POST , 'telCelular' , FILTER_SANITIZE_SPECIAL_CHARS);
            $telCelular = filter_input(INPUT_POST, 'telCelular', FILTER_SANITIZE_STRING);

            $telFixo = filter_input(INPUT_POST , 'telFixo' , FILTER_SANITIZE_SPECIAL_CHARS);
            $telFixo = filter_input(INPUT_POST, 'telFixo', FILTER_SANITIZE_STRING);

            $endereco = filter_input(INPUT_POST , 'endereco' ,FILTER_SANITIZE_SPECIAL_CHARS);
            $endereco = filter_input(INPUT_POST , 'endereco' ,FILTER_VALIDATE_INT);

            $login = filter_input(INPUT_POST , 'endereco' ,FILTER_SANITIZE_SPECIAL_CHARS);
            $login = filter_input(INPUT_POST, 'login', FILTER_SANITIZE_STRING);
            
            $senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);


            // tentativa até então falha de enviar uma senha cripitografada
            
            /*if ($senha) {
                $senha_criptografada = hash('sha256', $senha);
                // Faça o processamento adicional aqui
                echo "Senha criptografada: $senha_criptografada";
            } else {
                echo "Por favor, insira uma senha válida.";
            }*/
        }
    }
