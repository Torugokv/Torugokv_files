import sqlite3

#Conectar ao banco de dados
conector = sqlite3.connect("atividade_estacio.db")
cursor = conector.cursor()

#Criar a tabela cadastro
comando_sql = "CREATE TABLE IF NOT EXISTS cadastro(codigo inteiro, nome, text, idade interger)"
cursor.execute(comando_sql)

#Inserir dados na tabela
comando_sql = "INSERT INTO cadastro (codigo, nome, idade) VALUES (1308, 'Maria', 1)"
cursor.execute(comando_sql)

comando_sql = "INSERT INTO cadastro (codigo, nome, idade) VALUES (1309, 'Tonico', 2)"
cursor.execute(comando_sql)

comando_sql = "INSERT INTO cadastro (codigo, nome, idade) VALUES (1310, 'Amauri', 3)"
cursor.execute(comando_sql)

#Confirmar as operações
conector.commit()

#Fechar a conexão
cursor.close()
conector.close()
