<a class="collapse-item" href="buttons.html">Buttons</a>
<ul>
    @foreach($users as $user)
        <li>{{$user->name}}</li>
    @endforeach
</ul>
