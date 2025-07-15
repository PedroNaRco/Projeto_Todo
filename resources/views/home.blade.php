<x-layout page="home">

    <x-slot:btn>
       <a href="#" class="btn btn-primary">Criar Tarefa</a>
    </x-slot:btn>

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
            Tarefas: 0/0
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
            @php
                $tasks = [
                    ['id' => 1, 'done' => false, 'title' => 'Primeira tasks', 'category' => 'Categoria 1'],
                    ['done' => true, 'title' => 'Segunda tasks', 'category ' => 'Categoria 2'],
                    ['done' => false, 'title' => 'Terceira tasks', 'category' => 'Categoria 1'],
                ];
            @endphp
            <x-task :data=$tasks[0] />
            <x-task :data=$tasks[1] />
            <x-task :data=$tasks[2] />

        </div>
        <div class="task_list">

        </div>
    </section>
</x-layout>
