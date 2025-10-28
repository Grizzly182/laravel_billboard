    <div class="card p-1 m-1 shadow-sm" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">{{ $billboard->title }}</h5>
            <p class="card-text"><small class="text-muted">{{ $billboard->price }} руб.</small></p>
            <a href="{{ route('billboard.edit', ['billboard' => $billboard]) }}" class="btn btn-primary">Изменить</a>
            <a href="{{ route('billboard.delete', ['billboard' => $billboard]) }}" class="btn btn-danger">Удалить</a>
        </div>
    </div>
