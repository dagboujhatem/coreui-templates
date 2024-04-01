@extends('layouts.app')

@section('content')
    <ol class="breadcrumb">
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
     <div class="container-fluid">
          <div class="animated fadeIn">
                @include('coreui-templates::common.errors')
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <i class="fa fa-plus-square-o fa-lg"></i>
                                <strong>
                                    @if($config->options->localized)
                                        @@lang('crud.create') @@lang('models/{!! $config->modelNames->camelPlural !!}.singular')
                                    @else
                                        Create {{ $config->modelNames->humanPlural }}
                                    @endif
                                </strong>
                            </div>
                            <div class="card-body">
                                @{!! Form::open(['route' => '{{ $config->prefixes->getRoutePrefixWith('.') }}{{ $config->modelNames->camelPlural }}.store']) !!}

                                @@include('{{ $config->prefixes->getViewPrefixForInclude() }}{{ $config->modelNames->snakePlural }}.fields')

                                @{!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
           </div>
    </div>
@endsection
