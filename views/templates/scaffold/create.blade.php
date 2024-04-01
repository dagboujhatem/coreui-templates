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
                @@lang('crud.add_new') @@lang('models/{!! $config->modelNames->camelPlural !!}.singular')
            @else
                Add New {{ $config->modelNames->humanPlural }}
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
                            @{!! Form::open(['route' => '{{ $config->prefixes->getRoutePrefixWith('.') }}{{ $config->modelNames->camelPlural }}.store']) !!}
                            <div class="card-header">
                                <strong>
                                    @if($config->options->localized)
                                        @@lang('crud.create') @@lang('models/{!! $config->modelNames->camelPlural !!}.singular')
                                    @else
                                        Create {{ $config->modelNames->humanPlural }}
                                    @endif
                                </strong>
                            </div>
                            <div class="card-body">
                                @@include('{{ $config->prefixes->getViewPrefixForInclude() }}{{ $config->modelNames->snakePlural }}.fields')
                            </div>
                            <div class="card-footer">
                                <div class="row justify-content-end">
                                    <button class='btn btn-sm btn-primary' type='submit' value='submit'>
                                        <i class='fa fa-save'></i> @@lang('crud.edit')
                                    </button>
                                    <a href="@{{ route('{!! $config->prefixes->getRoutePrefixWith('.') !!}{!! $config->modelNames->camelPlural !!}.index') }}" class="btn btn-sm btn-secondary ml-1">
                                        <i class="fa fa-angle-left"></i> @@lang('crud.cancel')
                                    </a>
                                </div>
                            </div>
                            @{!! Form::close() !!}
                        </div>
                    </div>
                </div>
           </div>
    </div>
@@endsection
