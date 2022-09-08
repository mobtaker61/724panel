<div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdown-flag">
    @foreach($available_locales as $locale_name => $available_locale)
        @if($available_locale === $current_locale)
            <a class="dropdown-item hidden" href="language/{{ $current_locale[0] }}"><i class="flag-icon flag-icon-{{ $current_locale[1] }}"></i>{{ $locale_name }}</a>
        @else
            <a class="dropdown-item" href="language/{{ $available_locale[0] }}"><i class="flag-icon flag-icon-{{ $available_locale[1] }}"></i>{{ $locale_name }}</a>
        @endif
    @endforeach
</div>
