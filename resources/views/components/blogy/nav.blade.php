<div>
    <h1>Blogy</h1>
    <nav>
        <ul>
            <li @if($activeCard == 1) class="active" @endif>
                <a href="{{route('blogs.index')}}">Blogy</a>
            </li>

            <li  @if($activeCard == 2) class="active" @endif>
                <a href="{{route('blogers')}}">Zoznam blogerov</a>
            </li>
            <li class="no-active">
                <a id="btn-new-blog" href="{{route('blogs.create')}}">Napísať nový článok</a>
            </li>
        </ul>
    </nav>
</div>

