<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Todo APP</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">-->
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" 5rel="stylesheet">
</head>

<body>

    <div class="container">
        <div class="sidebar">
            <img src="assets/imagens/logo.png" alt="Logo Todo APP">
        </div>
        <div class="content">
            <nav>
                <a href="#" class="btn btn-primary">Criar Tarefa</a>
            </nav>

            <main>
                <section class="graph">
                    <div className="graph_header">

                        <h2>Progresso do dia</h2>
                        <div class="graph_header-line"></div>
                        <div class="graph_header-date">

                            <img src="assets/imagens/icon-prev.png" alt="Calendário" />
                            13 de Dezembro de 2023
                            <img src="assets/imagens/icon-next.png" alt="">
                        </div>

                    </div>

                    <div class="graph_header-subtitle">
                        Tarefas 0/0
                    </div>


                    <div class="graph-placeholder">

                    </div>

                    <div class="tasks_left_footer">
                        <img src="/assets/imagens/icon-info.png" alt="" />
                        Resta 3 tarefas para serem finalizadas
                    </div>

                </section>

                <section class="list">
                    <div class="list_header">
                        <select class="list_header-select">
                            <option value="1">Todas às tarefas</option>
                        </select>
                    </div>
                    <div class="task_list">
                        <div class="task">
                            <div class="title">
                                <input type="checkbox"/>
                                <h1>Titulo da tarefa</h1>
                            </div>
                             <div class="priority">
                                <div class="sphere"></div>
                                <h1>Titulo da tarefa</h1>
                            </div>
                            <div class="actions">
                                <a href="#"> <img src="assets/imagens/icon-edit.png" alt/></a>
                                <a href="#"> <img src="assets/imagens/icon-delete.png" alt/></a>
                            </div>
                        </div>
                    </div>
                    <div class="task_list">

                    </div>
                </section>

            </main>
        </div>


    </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous">
    </script>
</body>

</html>
