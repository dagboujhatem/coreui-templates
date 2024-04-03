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
    </ol>
@@endsection
@@section('content')
    <div class="container-fluid">
        <div class="animated fadeIn">
            @@include('flash::message')
             <div class="row">
                 <div class="col-lg-12">
                     <div class="card">
                         <div class="card-header">
                             @if($config->options->localized)
                                 @@lang('models/{{ $config->modelNames->camelPlural }}.plural')
                             @else
                                 {{ $config->modelNames->humanPlural }}
                             @endif
                         </div>
                         <div class="card-body">
                             <div class="row">
                                 <div class="col-11 d-flex justify-content-end">
                                     <a class="btn btn-primary pull-right mb-1" href="@{{ route('{!! $config->prefixes->getRoutePrefixWith('.') !!}{!! $config->modelNames->camelPlural !!}.create') }}">
                                         <i class="fa fa-plus"></i>
                                         @if($config->options->localized)
                                             @@lang('crud.add_new')
                                             @@lang('models/{{ $config->modelNames->camelPlural }}.singular')
                                         @else
                                             Add New {{ $config->modelNames->humanPlural }}
                                         @endif
                                     </a>
                                 </div>
                             </div>
                             {!! $table !!}
                         </div>
                     </div>
                  </div>
             </div>
         </div>
    </div>
@@endsection

