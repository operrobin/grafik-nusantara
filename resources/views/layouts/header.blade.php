<div class="header">
    <div class="title ml-sm-5">
        <a href="{{ url('') }}">Grafis Nusantara</a>
    </div>

    <button class="btn btn-link" id="header-toggle">
        <svg width="1.3em" height="1.3em" viewBox="0 0 16 16" class="bi bi-list close-button" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M2.5 11.5A.5.5 0 0 1 3 11h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 7h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 3h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
        </svg>
        <svg width="1.3em" height="1.3em" viewBox="0 0 16 16" class="bi bi-x open-button" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
        </svg>
    </button>

    @php
        echo strpos(Route::currentRouteName(), 'koleksi');
    @endphp

    <div class="nav-menu">
        <ul class="menu-list">
            <li @if(strpos(Route::currentRouteName(), 'koleksi') !== false) class="active" @endif>
                <a class="menu-letter-spacing" href="{{ route('koleksi') }}">Koleksi</a>
            </li>
            <li @if(strpos(Route::currentRouteName(), 'data') !== false) class="active" @endif>
                <a class="menu-letter-spacing" href="{{ route('data') }}">Data</a>
            </li>
            <li @if(strpos(Route::currentRouteName(), 'tentang') !== false) class="active" @endif>
                <a class="menu-letter-spacing" href="{{ route('tentang') }}">Tentang</a>
            </li>
            <li @if(strpos(Route::currentRouteName(), 'jurnal') !== false) class="active" @endif>
                <a class="menu-letter-spacing" href="{{ route('jurnal') }}" class="jurnal-link">Jurnal</a>
            </li>
            <li @if(strpos(Route::currentRouteName(), 'submit') !== false) class="active" @endif>
                <a class="menu-letter-spacing" href="{{ route('submit') }}">Submit</a>
            </li>
        </ul>
    </div>
</div>
