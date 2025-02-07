<!-- CLIENTES -->

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel Administrativo - Rosa Vida</title>
    <link rel="stylesheet" href="Gerenciar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="admin-container">
        <div class="menu">
            <header>
                <h1>Rosa Vida Floricultura</h1>
                <p>Beleza e Amor em Cada Flor</p>
            </header>
        
            <nav>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="php/Gerenciar.php">Clientes</a></li>
                    <li><a href="php/Gerenciar_V.php">Vendedores</a></li>
                    <li><a href="php/Gerenciar_F.php">Flores</a></li>
                </ul>
            </nav>

        <div class="admin-content">

            <h1>Gerenciar Clientes</h1>
            <section id="clientes">
                
                <div class="form-container">
                    <h2>Cadastrar Cliente</h2>
                    <form>
                        <input type="text" placeholder="Nome Completo" required name="nome" autocomplete="off">
                        <input type="text" placeholder="CPF" required name="cpf" autocomplete="off">
                        <input type="email" placeholder="E-mail" required name="email" autocomplete="off">
                        
                        <input type="tel" placeholder="Telefone" required name="fone" autocomplete="off"> 
                        <input type="url" placeholder="Endereço" required name="endereco" autocomplete="off">
                        <button type="submit" name="cadastrar" >Cadastrar Cliente</button>
                    </form>
                </div>

                <div class="table-container">
                    <h2>Lista de Clientes</h2>
                    <table>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nome</th>
                                <th>CPF</th>
                                <th>E-mail</th>
                                <th>Telefone</th>
                                <th>Endereço</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Maria Silva</td>
                                <td>*****</td>
                                <td>maria@email.com</td>
                                <td>(11) 99999-9999</td>
                                <td>Rua sla oque</td>
                                <td class="action-buttons">
                                    <button class="edit-btn">Editar</button>
                                    <button class="remove-btn">Remover</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>
        </div>
    </div>
    <footer>
        <p>&copy; 2024 Rosa Vida Floricultura. Todos os direitos reservados.</p>
    </footer>
</body>
</html>

