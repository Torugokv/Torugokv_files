#bibliotecas
from flask import Flask, render_template, request, redirect, url_for
import sqlite3
import os
app=Flask(__name__)
#Função para criar o banco de dados e a tabela, caso não existam
def create_database():
    if not os.path.exists('notas.db'):
        conn = sqlite3.connect('notas.db')
        conn.execute('''CREATE TABLE IF NOT EXISTS notas (
                        id INTEGER PRIMARY KEY AUTOINCREMENT,
                        aluno TEXT NOT NULL,
                        disciplina TEXT NOT NULL,
                        nota TEXT NOT NULL
                        );''')
        conn.commit()
        conn.close()

#Conectrar ao banco de dados SQLITE
def get_db_connection():
    conn=sqlite3.connect('notas.db')
    conn.row_factory = sqlite3.Row
    return conn

#Rota principal que exibe a lista de notas 
@app.route('/')
def index():
    conn = get_db_connection()
    notas = conn.execute('SELECT * FROM notas').fetchall()
    conn.close()
    return render_template('index.html', notas=notas)

#rota para adicionar uma nova nota

@app.route('/adicionar', methods  = ('GET', 'POST'))
def adicionar():
    if request.method == 'POST':
        aluno = request.form['aluno']
        disciplina = request.form ['disciplina']
        nota=request.form['nota']

        conn = get_db_connection()
        conn.execute('INSERT INTO notas (aluno, disciplina, nota) VALUES (?,?,?)',
                    (aluno, disciplina,nota))
        conn.commit()
        conn.close()
        return redirect(url_for('index'))
    return render_template('adicionar.html')
#Executar o aplicativo Flask
if __name__ == '__main__':
#Cria o banco de dados e a tabela, se não existirem
    create_database()
    app.run(debug=True)