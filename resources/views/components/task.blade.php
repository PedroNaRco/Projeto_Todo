<div class="task">
    <div class="title">
        <input type="checkbox"
        @if ($data && $data['done'])
            checked

        @endif
        />
        <h1>{{$data['title' ?? '']}}</h1>
    </div>
    <div class="priority">
        <div class="sphere"></div>
        <h1>{{$data['category'] ?? ''}}</h1>
    </div>
    <div class="actions">
        <a href="https://meusite.com/taks/edit{{$data['id'] ?? '' }}"> <img src="assets/imagens/icon-edit.png" alt /></a>
        <a href="https://meusite.com/taks/delete{{$data['id'] ?? '' }}"> <img src="assets/imagens/icon-delete.png" alt /></a>
    </div>
</div>
