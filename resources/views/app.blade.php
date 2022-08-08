<h2>Pending tasks</h2>
<ul class="list-group">
@foreach($todos as $todo)
    <li class="list-group-item">{{ $todo->task }}</li>
@endforeach
</ul>