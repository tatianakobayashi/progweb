<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<script src="/path/to/jquery.slim.min.js"></script>
<script src="src/mini-event-calendar.js"></script>

<nav class="navbar navbar-expand-lg navbar-light bg-light">

    <a class="navbar-brand" href="#">
        <img src="https://image.flaticon.com/icons/png/512/23/23715.png" alt="logo" style="width:40px;">
    </a>
    <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
    </form>
</nav>


<div class="card4">

    <div class="container-fluid" style="align-content: center;">

        <div class="card" id="right">
            <div class="btn-group-vertical" style="width: 30rem;">
                <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#modalEmprestimo" >Solicitar Empréstimo</button>
                <a type="button" class="btn btn-primary btn-lg" href="index?page=Ebook&name=Ebook">Ler E-Book</a>
            </div>
        </div>
        <div class="modal fade" id="modalEmprestimo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Agendar Empréstimo</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <label for="data">Data</label>
                            <input type="date" id="data" name="dataNasc">
                        <br>
                        <label for="hora">Hora</label>
                            <input type="time" id="hora" name="horaCadastro">

                        <div class="form">
                            <label for="exampleFormControlSelect1">Quantidade de livros</label>
                            <select class="form">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <script>
                            function funcao1()
                            {
                                alert("Empréstimo efetuado com sucesso!");
                            }
                        </script>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                        <button type="button" class="btn btn-primary" onclick="funcao1()" data-dismiss="modal">Confirmar Empréstimo</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="card"  id="left" style="width: 18rem;">
                <img id="myImg" src="https://http2.mlstatic.com/principios-de-bioquimica-lehninger-D_NQ_NP_631314-MLB30750898459_052019-Q.jpg" alt="" style="width:100%;max-width:300px">
                <div id="myModal" class="modal">

                    <!-- The Close Button -->
                    <span class="close">&times;</span>

                    <!-- Modal Content (The Image) -->
                    <img class="modal-content" id="img01">

                    <!-- Modal Caption (Image Text) -->
                    <div id="caption"></div>
                    <script>
                        // Get the modal
                        var modal = document.getElementById("myModal");

                        // Get the image and insert it inside the modal - use its "alt" text as a caption
                        var img = document.getElementById("myImg");
                        var modalImg = document.getElementById("img01");
                        var captionText = document.getElementById("caption");
                        img.onclick = function(){
                            modal.style.display = "block";
                            modalImg.src = this.src;
                            captionText.innerHTML = this.alt;
                        }

                        // Get the <span> element that closes the modal
                        var span = document.getElementsByClassName("close")[0];

                        // When the user clicks on <span> (x), close the modal
                        span.onclick = function() {
                            modal.style.display = "none";
                        }
                    </script>
                </div>
            </div>
            <div class="card-body" id="center">
                <h1 class="card-title">Princípios de Bioquímica</h1>
                <h5 class="card-title" id="card-title2">Subtítulo: 	LEHNINGER </h5>
                <h5 class="card-title"id="card-title2">Autor: LEHNINGER, ALBERT L. </h5>
                <h5 class="card-title" id="card-title2">Editora: OMEGA ESPANHA </h5>
                <div class="scroll">
                    <h4></h4>
                    Esta edição foi projetada para ser utilizada em cursos de um ou dois semestres para alunos de graduação em bioquímica e disciplinas relacionadas, bem como para estudantes de graduação que necessitam de uma ampla introdução à bioquímica. Ela também éadequada para cursos de medicina, odontologia, veterinária, farmácia e outras escolas profissionais. Este livro será usado com maior sucesso pelos estudantes que tenham completado dois ou mais anos de química ao nível colegial, incluindo química orgânica, e tenham recebido menos uma introdução à biologia; alguma base em física e fisicoquímica será muito útil, mas todos os princípios relevantes são introduzidos de maneira a tornarem-se acessíveis à maioria dos estudantes.Esta edição foi projetada para ser utilizada em cursos de um ou dois semestres para alunos de graduação em bioquímica e disciplinas relacionadas, bem como para estudantes de graduação que necessitam de uma ampla introdução à bioquímica. Ela também éadequada para cursos de medicina, odontologia, veterinária, farmácia e outras escolas profissionais. Este livro será usado com maior sucesso pelos estudantes que tenham completado dois ou mais anos de química ao nível colegial, incluindo química orgânica, e tenham recebido menos uma introdução à biologia; alguma base em física e fisicoquímica será muito útil, mas todos os princípios relevantes são introduzidos de maneira a tornarem-se acessíveis à maioria dos estudantes.
                </div>

            </div>
        </div>

    </div>

</div>


