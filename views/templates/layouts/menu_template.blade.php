<li class="c-sidebar-nav-item">
    <a class="c-sidebar-nav-link" href="@{{ route('{!! $config->prefixes->getRoutePrefixWith('.') !!}{!! $config->modelNames->camelPlural !!}.index') }}" class="@{{ Request::is('{!! $config->prefixes->getRoutePrefixWith('.') !!}{!! $config->modelNames->camelPlural !!}*') ? 'c-active' : '' }}">
        <i class="c-sidebar-nav-icon cil-home"></i>
        @if($config->options->localized)
            <span>@@lang('models/{{ $config->modelNames->camelPlural }}.plural')</span>
        @else
            <span>{{ $config->modelNames->humanPlural }}</span>
        @endif
    </a>
</li>
