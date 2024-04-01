<li class="nav-item">
    <a class="nav-link" href="@{{ route('{!! $config->prefixes->getRoutePrefixWith('.') !!}{!! $config->modelNames->camelPlural !!}.index') }}" class="nav-link @{{ Request::is('{!! $config->prefixes->getRoutePrefixWith('.') !!}{!! $config->modelNames->camelPlural !!}*') ? 'active' : '' }}">
        <i class="nav-icon icon-cursor"></i>
        @if($config->options->localized)
            <span>@@lang('models/{{ $config->modelNames->camelPlural }}.plural')</span>
        @else
            <span>{{ $config->modelNames->humanPlural }}</span>
        @endif
    </a>
</li>
