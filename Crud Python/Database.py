import mysql.connector

class Database:
    def __init__(self, banco="crud_py"):
        self.banco = banco
        self.conn = None

    def connect(self):
        self.conn = mysql.connector.connect(host = '10.38.0.83',database = 'crud_py', user= 'luana',password = '321')
        if self.conn.is_connected():
            self.cursor = self.conn.cursor()
            print("conectado com sucesso!")

        else:
            print("error")

    def insert(self, tupla):
        self.connect()
        try:

            # args = ("Sabrina Luana", "9374234913", "Sabrina@gmail.com", "345")
            # nome = "sabrina Luana"
            # cpf = "9374234913"
            # email = "Sabrina@gmail.com"
            # senha = "345"

            self.cursor.execute('insert into usuario (nome,cpf,email,senha) values (%s,%s,%s,%s)', tupla)
            self.conn.commit()
            return True
        
        except Exception as erro:
            print(erro)

        finally:
            self.close_connection()
        

    def insert2(self, tupla):
        self.connect()
        try:

            self.cursor.execute('insert into produto (nome,descricao,marca,modelo,preco,qte,cor,peso) values (%s,%s,%s,%s,%s,%s,%s,%s)', tupla)
            self.conn.commit()
            return True


        except Exception as erro:
            print(erro)

        finally:
            self.close_connection()

    def select(self):
        self.connect()
        try:
            self.cursor.execute("select * from usuario")
            dados = self.cursor.fetchall()

            return dados

        except Exception as erro:
            print(erro)

        finally:
            self.close_connection()



    def select2(self):
        self.connect()
        try:
            self.cursor.execute("select * from produto")
            dados = self.cursor.fetchall()

            return dados

        except Exception as erro:
            print(erro)

        finally:
            self.close_connection()





    def select_id(self, id):
        self.connect()
        try:
            self.cursor.execute(f"select * from usuario where id = {id}")
            dados = self.cursor.fetchone()

            return dados
            
            # print(f"Id: {dados[0]} Nome: {dados[1]}, CPF:{dados[2]}")

        except Exception as erro:
            print(erro)
        finally:
            self.close_connection()


    def select_id2(self, id):
        self.connect()
        try:
            self.cursor.execute(f"select * from produto where id = {id}")
            dados = self.cursor.fetchone()

            return dados

        except Exception as erro:
            print(erro)
        finally:
            self.close_connection()









    def delete(self, id):
        self.connect()
        try:
            self.cursor.execute(f"delete from usuario where id = {id}")
            self.conn.commit()
            return True

        except Exception as erro:
                    print(erro)


        finally:
            self.close_connection()

    def delete2(self, id):
        self.connect()
        try:
            self.cursor.execute(f"delete from produto where id = {id}")
            self.conn.commit()
            return True

        except Exception as erro:
                    print(erro)


        finally:
            self.close_connection()

        

    def update(self, lista):
        self.connect()
        # usuario = list(self.select_id(id))
        # usuario[1] = input("Digite seu Nome:")
        # usuario[2] = input("Digite seu cpf:")
        # usuario[3] = input("Digite seu Email:")
        # usuario[4] = input("Digite seu Senha:")
        try:
            self.cursor.execute(f"""
                                update usuario set nome = '{lista[1]}',
                                cpf = '{lista[2]}', 
                                email = '{lista[3]}', 
                                senha = '{lista[4]}'
                                where id = {lista[0]}

                                """)
            
            self.conn.commit()
            return True

        except Exception as erro:
            print(erro)


        finally:
            self.close_connection()


    def update2(self, lista):
        self.connect()
        # usuario = list(self.select_id(id))
        # usuario[1] = input("Digite seu Nome:")
        # usuario[2] = input("Digite seu cpf:")
        # usuario[3] = input("Digite seu Email:")
        # usuario[4] = input("Digite seu Senha:")
        print("CHEGOU NA FUNCAO UPDATE2: ",lista)
        try:
            self.cursor.execute(f"""
                                update produto 
                                SET nome = '{lista[1]}',
                                descricao = '{lista[2]}', 
                                marca = '{lista[3]}', 
                                modelo = '{lista[4]}',
                                preco = {lista[5]},
                                qte = {lista[6]},
                                cor = '{lista[7]}',
                                peso = {lista[8]}
                                where id = {lista[0]}

                                """)
            
            self.conn.commit()
            return True

        except Exception as erro:
            print(erro)


        finally:
            self.close_connection()





    def close_connection(self):
        if self.conn.is_connected():
            self.cursor.close()
            self.conn.close()
            print("conexão encerrada com sucesso!!!")


        
if __name__ == "__main__":
    banco = Database()
    banco.select_id(4)

