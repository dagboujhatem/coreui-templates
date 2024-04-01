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
                @@lang('crud.edit') @@lang('models/{!! $config->modelNames->camelPlural !!}.singular')
            @else
                Edit {{ $config->modelNames->humanPlural }}
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
                              <i class="fa fa-edit fa-lg"></i>
                              <strong>
                                  @if($config->options->localized)
                                      @@lang('crud.edit') @@lang('models/{!! $config->modelNames->camelPlural !!}.singular')
                                  @else
                                      Edit {{ $config->modelNames->humanPlural }}
                                  @endif
                              </strong>
                          </div>
                          <div class="card-body">
                              @{!! Form::model(${{ $config->modelNames->camel }}, ['route' => ['{{ $config->prefixes->getRoutePrefixWith('.') }}{{ $config->modelNames->camelPlural }}.update', ${{ $config->modelNames->camel }}->{{ $config->primaryName }}], 'method' => 'patch']) !!}

                              @@include('{{ $config->prefixes->getViewPrefixForInclude() }}{{ $config->modelNames->snakePlural }}.fields')

                              @{!! Form::close() !!}
                          </div>
                        </div>
                    </div>
                </div>
         </div>
    </div>
@@endsection