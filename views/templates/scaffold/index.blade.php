@@extends('layouts.app')

@@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            @if($config->options->localized)
                @@lang('models/{{ $config->modelNames->camelPlural }}.plural')
            @else
                {{ $config->modelNames->humanPlural }}
            @endif
        </li>
    </ol>
    <div class="container-fluid">
        <div class="animated fadeIn">
            @@include('flash::message')
             <div class="row">
                 <div class="col-lg-12">
                     <div class="card">
                         <div class="card-header">
                             <i class="fa fa-align-justify"></i>
                             @if($config->options->localized)
                                 @@lang('models/{{ $config->modelNames->camelPlural }}.plural')
                             @else
                                 {{ $config->modelNames->humanPlural }}
                             @endif
                             <a class="pull-right" href="@{{ route('{!! $config->prefixes->getRoutePrefixWith('.') !!}{!! $config->modelNames->camelPlural !!}.create') }}">
                                 <i class="fa fa-plus-square fa-lg"></i>
                             </a>
                         </div>
                         <div class="card-body">
                             {!! $table !!}
                         </div>
                     </div>
                  </div>
             </div>
         </div>
    </div>
@@endsection

