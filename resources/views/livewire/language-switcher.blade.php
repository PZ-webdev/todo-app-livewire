<div>
    @if(session('local'))
        <a href="#" class="nav-link" id="dropdownMenu" data-toggle="dropdown">
            <img src="flags/{{session('local')}}.png" alt="{{app()->getLocale()}}">
        </a>
    @else
        <a href="#" class="nav-link" id="dropdownMenu" data-toggle="dropdown">
            <img src="{{asset('flags/en.png')}}" alt="EN">
        </a>
    @endif
    <div class="dropdown">
        <div class="dropdown-menu" aria-labelledby="dropdownMenu">
            <a 
            class="dropdown-item {{session('local') == 'pl' ? 'd-none' : ''}}" 
            href="{{url('lang/pl')}}"
            >
                <img src="{{asset('flags/pl.png')}}" alt="PL">
            </a>
            <a 
            class="dropdown-item {{session('local') == 'en' ? 'd-none' : ''}}" 
            href="{{url('lang/en')}}"
            >
                <img src="{{asset('flags/en.png')}}" alt="EN">
            </a>
            <a 
            class="dropdown-item {{session('local') == 'fr' ? 'd-none' : ''}}" 
            href="{{url('lang/fr')}}"
            >
                <img src="{{asset('flags/fr.png')}}" alt="FR">
            </a>
        </div>
    </div>
</div>
