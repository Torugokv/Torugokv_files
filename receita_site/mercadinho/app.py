# Importa a classe Flask, que é usada para criar a aplicação Flask
from flask import Flask, render_template, request, url_for, redirect

# Importa a classe SQLAlchemy, que permite a integração do banco de dados com a aplicação Flask
from flask_sqlalchemy import SQLAlchemy

# Cria a aplicação Flask
app = Flask(__name__)

# Configura o banco de dados SQLite
app.config['SQLALCHEMY_DATABASE_URI'] = 'sqlite:///db.sqlite'
app.config['SQLALCHEMY_TRACK_MODIFICATIONS'] = False

# Inicializa o objeto SQLAlchemy para gerenciar o banco de dados
db = SQLAlchemy(app)


class Produto(db.Model):
    __tablename__ = 'itens' # Nome da tabela no banco de dados
    _id = db.Column(db.Integer, primary_key=True, autoincrement=True) # Coluna de ID
    nome = db.Column(db.String) # Coluna para o nome
    preco = db.Column(db.String) # Coluna para o preco
    quantidade = db.Column(db.String) # Coluna para o quantidade
    descricao = db.Column(db.String) # Coluna para a descricao

# Construtor da classe Produto para inicializar os atributos
def __init__(self, nome, preco, quantidade, descricao):
    self.nome = nome
    self.preco = preco
    self.quantidade = quantidade
    self.descricao = descricao

# Cria as tabelas no banco de dados caso elas não existam
with app.app_context():
    db.create_all()

# Define a rota principal que redireciona para a página 'index'
@app.route("/")
def home():
    return redirect(url_for('index'))

# Define a rota para a página 'index', que renderiza o template 'index.html'
@app.route("/index")
def index():
    return render_template("index.html")

 # Rota para a página de cadastro de clientes, lidando com métodos GET e POST
# Rota para a página de cadastro de clientes, lidando com métodos GET e POST
@app.route("/cadastro", methods=['GET', 'POST'])
def cadastro():
    if request.method == "POST":  # Quando o formulário é submetido
        # Obtém os dados do formulário
        nome = request.form.get("nome")
        preco = request.form.get("preco")
        quantidade = request.form.get("quantidade")
        descricao = request.form.get("descricao")

        # Verifica se todos os campos foram preenchidos
        if nome and preco and quantidade and descricao:
            try:
                # Cria um novo objeto Produto e adiciona ao banco de dados
                p = Produto(nome=nome, preco=preco, quantidade=quantidade, descricao=descricao)
                db.session.add(p)
                db.session.commit()  # Confirma a transação
                return redirect(url_for('lista'))  # Redireciona para a lista de clientes
            except Exception as e:
                db.session.rollback()  # Reverte a transação em caso de erro
                print(f"Error: {e}")
                # Redireciona para a página de cadastro em caso de erro
                return redirect(url_for('cadastro'))
        else:
            # Se algum campo estiver vazio, renderiza o formulário novamente
            return render_template("cadastro.html", error="Todos os campos são obrigatórios.")

    # Se o método for GET, renderiza a página de cadastro
    return render_template("cadastro.html")
    

# Rota para exibir a lista de clientes cadastrados
@app.route("/lista")
def lista():
    produtos = Produto.query.all() # Consulta todas as Produtos no banco de dados
    return render_template("lista.html", produtos=produtos) # Renderiza a página com a lista de Produtos
# Inicia o servidor Flask no modo debug
if __name__ == '__main__':
    app.run(debug=True)
