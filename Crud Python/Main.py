from Usuario import Usuario
from Produto import Produto


usu1 = Usuario()
prod1 = Produto()


## while true menu

while True:
    print("Menu:\n\n1- Cadastrar Usuario\n2- Lista de Usuarios\n3- ver um Usuario\n4- Excluir Usuario\n5- Atualizar Usuario")
    print("6- Adicionar Produto\n7- Lista de Produtos \n8- ver um Produto \n9-Excluir Produto\n10- Atualizar Produto")


    while True:
        a = int(input("Digite um número:"))
        
        if a < 1 or a > 10:
            print("Digite outro numero.")
            break

        if a == 1:

            usu1.nome = input("Digite seu Nome: ")
            usu1.cpf = input("Digite seu CPF: ")
            usu1.email = input("Digite seu Email: ")
            usu1.senha = input("Digite seu Senha: ")
            result = usu1.cadastrar()

            if result == True:
                        print(f"Usuario {usu1.nome} cadastrado com sucesso!!!")
                        break

            else:
                print("error")
                


        if a == 2:
            result = usu1.listar()

            for item in result:
                print(item)
                break


        if a == 3:
            id = int(input("Digite o ID do usuario que deseja verificar: "))
            result = usu1.select_por_id(id)
            print(result)
            break


        if a == 4:
            id = int(input("Digite o ID do usuario que deseja excluir: "))
            excluir = usu1.excluir(id)
            if excluir == True:
                print("Excluidoo")
                break

            else:
                print("erro")


        if a == 5:
            id = int(input("Digite o Id do usuario que deseja atualizar: "))
            result = usu1.select_por_id(id)
            print(result)
            result[1] = input("Digite seu novo Nome:")
            result[2] = input("Digite seu novo cpf:")
            result[3] = input("Digite seu novo Email:")
            result[4] = input("Digite sua nova Senha:")

            atualiza = usu1.atualizar(result)

            if atualiza == True:

                print(result)
                break

            else:
                print("erro")

        if a == 6:
            prod1.nome = input("Digite o nome do produto: ")
            prod1.descricao = input("Digite a descrição: ")
            prod1.marca = input("Digite a Marca: ")
            prod1.modelo = input("Digite o modelo: ")
            prod1.preco = float(input("Digite o preço: "))
            prod1.qte = int(input("Digite a quantidade: "))
            prod1.cor = input("Digite a cor: ")
            prod1.peso = float(input("Digite o peso: "))
            result = prod1.cadastrar2()

            if result == True:
                        print(f"Produto {prod1.nome} cadastrado com sucesso!!!")
                        break

            else:
                print("error")


        if a == 7:
            result = prod1.listar2()

            for item in result:
                print(item)
                break


        if a == 8:
            id = int(input("Digite o ID do produto que deseja verificar: "))
            result = prod1.select_por_id2(id)
            print(result)
            break

        if a == 9:
            id = int(input("Digite o ID do produto que deseja excluir: "))
            excluir = prod1.excluir2(id)
            if excluir == True:
                print("Excluidoo")
                break

            else:
                print("erro")

        if a == 10:
            id = int(input("Digite o Id do produto que deseja atualizar: "))
            result = prod1.select_por_id2(id)
            print(result)
            result[1] = input("Digite novo nome do produto: ")
            result[2] = input("Digite nova descrição: ")
            result[3] = input("Digite nova marca: ")
            result[4] = input("Digite novo modelo: ")
            result[5] = float(input("Digite novo preço: "))
            result[6] = int(input("Digite nova quantidade: "))
            result[7] = input("Digite nova cor:")
            result[8] = float(input("Digite novo peso:"))

            atualiza = prod1.atualizar2(result)

            if atualiza == True:

                print(result)
                break

            else:
                print("erro")
             
             
             
             
             
             
             



# result = usu1.select_por_id(4)
# print(result)




# result[1] = input("Digite seu Nome:")
# result[2] = input("Digite seu cpf:")
# result[3] = input("Digite seu Email:")
# result[4] = input("Digite seu Senha:")

# atualiza = usu1.atualizar(result)

# if atualiza == True:

#     print(result)

# else:
#     print("erro")













# result = usu1.listar()


# print(result)

# for item in result:
#     print(item)







# excluir = usu1.excluir(7)
# if excluir == True:
#     print("Excluidoo")

# else:
#     print("erro")

# usu1.nome = input("Digite seu Nome: ")
# usu1.cpf = input("Digite seu CPF: ")
# usu1.email = input("Digite seu Email: ")
# usu1.senha = input("Digite seu Senha: ")



# result = usu1.cadastrar()


# if result == True:
#     print(f"Usuario {usu1.nome} cadastrado com sucesso!!!")

# else:
#     print("error")










