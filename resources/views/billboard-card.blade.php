    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">{{ $billboard->title }}</h5>
            <p class="card-text">{{ $billboard->content }}</p>
            <p class="card-text"><small class="text-muted">{{ $billboard->price }} руб.</small></p>
            <p class="card-text"><small class="text-muted"><b>Автор:</b> {{ $billboard->user->name }}</small></p>
            <a href="{{ route('billboard.detail', ['billboard' => $billboard]) }}" class="btn btn-primary">Подробнее</a>
        </div>
    </div>
