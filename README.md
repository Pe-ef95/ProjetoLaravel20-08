# Inicialização do Projeto

Para começar, execute os comandos abaixo: 
![Criação do projeto](https://github.com/user-attachments/assets/3b6925bb-a914-46a9-8224-782e648b92f0)

Lembre-se de que estamos utilizando o Xampp, então não esqueça de iniciar o Apache e o MySQL:
![Start no Xampp](https://github.com/user-attachments/assets/4cfd5be6-8391-42dc-b3fa-394dd63a5996)

# Configuração de migration

Antes de tudo, precisamos configurar a conexão com o banco de dados no arquivo .env:
![Arquivo .env](https://github.com/user-attachments/assets/d61c597f-a019-4893-bb76-d0310ffa3fd6)

Garanta também que o banco já tenha sido criado no phpMyAdmin:  
![Banco criado](https://github.com/user-attachments/assets/fe4c9efa-0d40-40a4-8466-bc02ff6516eb)

Em seguida, rode o seguinte comando no terminal:  
![Comando de migration](https://github.com/user-attachments/assets/a987bd56-e1b8-4612-aa39-29e688375d26)

Um novo arquivo será adicionado dentro de database/migrations com o nome correspondente. A partir disso, edite a função up() desse arquivo:  
![Alterar função up()](https://github.com/user-attachments/assets/fbfe00f6-ad2b-45fc-b778-1ea57f96d54f)

Repita o mesmo procedimento para criar a tabela estoque:
![Migration estoque](https://github.com/user-attachments/assets/c2727cf6-d0eb-428c-a7fa-1444f6dec759)  
![Alteração estoque](https://github.com/user-attachments/assets/79b50100-f1c5-4feb-98c7-b281fabd3f02)

Na sequência, vamos criar também a tabela cadastro. Para isso execute o comando abaixo:
![Comando cadastro](https://github.com/user-attachments/assets/024f235f-13ff-4b6e-b3cb-22f97a2a54a3)

E edite o arquivo gerado, localizado na mesma pasta das outras migrations:  
![Alteração cadastro](https://github.com/user-attachments/assets/cc4afcb5-ebc2-46f2-914d-8e7a43bda6cc)

Por fim, execute todas as migrations de uma vez só:
![Executar migrations](https://github.com/user-attachments/assets/d2017e6c-a735-464b-bd47-0f602932f516)

Se tudo deu certo, o resultado aparecerá no phpMyAdmin:
![Resultado phpMyAdmin](https://github.com/user-attachments/assets/78a82368-8f97-41b9-8535-072c682acc91)  
![Tabela cadastro](https://github.com/user-attachments/assets/8cb77466-4313-4e49-9de7-33898f9bdf25)  
![Tabela estoque](https://github.com/user-attachments/assets/8494567d-05a0-459a-b88a-3f378f7ee2cf)
