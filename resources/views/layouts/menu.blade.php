<li class="nav-item">
    <a href="{{ route('mentors.index') }}"
       class="nav-link {{ Request::is('mentors*') ? 'active' : '' }}">
        <p>Mentor</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('siswas.index') }}"
       class="nav-link {{ Request::is('siswas*') ? 'active' : '' }}">
        <p>Siswa</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('programs.index') }}"
       class="nav-link {{ Request::is('programs*') ? 'active' : '' }}">
        <p>Program</p>
    </a>
</li>


