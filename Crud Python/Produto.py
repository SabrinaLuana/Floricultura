from Database import Database

class Produto:
    def __init__(self) -> None:
        self.nome = None
        self.descricao = None
        self.marca = None
        self.modelo = None
        self.preco = None
        self.qte = None
        self.cor = None
        self.peso = None
        self.banco = Database()

    def listar2(self):
        res = self.banco.select2()
        return res

    def select_por_id2(self, id):      
        res = self.banco.select_id2(id)
        return list(res)

    def atualizar2(self, lista):
        res = self.banco.update2(lista)
        return res
        

    def cadastrar2(self):
        tupla =(self.nome,self.descricao,self.marca,self.modelo,self.preco,self.qte,self.cor,self.peso)
        res = self.banco.insert2(tupla)
        return res


    def excluir2(self, id):
        res = self.banco.delete2(id)
        return res