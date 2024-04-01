@@extends('layouts.app')
@@section('breadcrumb')
    <ol class="breadcrumb my-0">
        <li class="breadcrumb-item">
            <a href="@{{ route('{!! $config->prefixes->getRoutePrefixWith('.') !!}{!! $config->modelNames->camelPlural !!}.index') }}">
                @if($config->options->localized)
                    @@lang('models/{!! $config->modelNames->camelPlural !!}.singular')
                @else
                    {{ $config->modelNames->humanPlural }}
                @endif
            </a>
        </li>
        <li class="breadcrumb-item active">
            @if($config->options->localized)
               @@lang('models/{!! $config->modelNames->camelPlural !!}.singular')  @@lang('crud.detail')
            @else
                {{ $config->modelNames->humanPlural }} Details
            @endif
        </li>
    </ol>
@@endsection
@@section('content')
     <div class="container-fluid">
          <div class="animated fadeIn">
              @@include('coreui-templates::common.errors')
                 <div class="row">
                     <div class="col-lg-12">
                         <div class="card">
                             <div class="card-header">
                                 <strong>
                                     @if($config->options->localized)
                                         @@lang('crud.detail')
                                     @else
                                         Details
                                     @endif
                                 </strong>
                                  <a href="@{{ route('{!! $config->prefixes->getRoutePrefixWith('.') !!}{!! $config->modelNames->camelPlural  !!}.index') }}" class="btn btn-light">
                                      @if($config->options->localized)
                                          @@lang('crud.back')
                                      @else
                                          Back
                                      @endif
                                  </a>
                             </div>
                             <div class="card-body">
                                 @@include('{{ $config->prefixes->getViewPrefixForInclude() }}{{ $config->modelNames->snakePlural }}.show_fields')
                             </div>
                         </div>
                     </div>
                 </div>
          </div>
    </div>
@@endsection
