<ul class="list-group">
    <h3>Категории</h3>
    @foreach(\App\Categories::all() AS $category)
        <li class="list-group-item">
            <a href="/{{$category->alias}}" class="">{{$category->name}}</a>
        </li>
    @endforeach
</ul>