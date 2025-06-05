@if ($paginator->hasPages())
    <nav>
        <ul class="pagination">

            @if ($paginator->onFirstPage())
                <li class="page-item disabled"></li>
            @else
                <li class="page-item">
                    <a class="page-link cursor-simple"
                       onkeypress="sendMeTo(event,'{{ $paginator->previousPageUrl() }}')" rel="prev"
                       onclick="takeMeTo('{{ $paginator->previousPageUrl() }}')">
                        <span>{{switchLanguages( 'Previous'?? '', 'قبلی'?? '')}}</span>
                    </a>
                </li>
            @endif


            @if ($paginator->hasMorePages())
                <li class="page-item">
                    <a class='page-link cursor-simple' onkeypress="sendMeTo(event,'{{ $paginator->nextPageUrl() }}')"
                       rel="next"
                       onclick="takeMeTo('{{ $paginator->nextPageUrl() }}')">
                        <span>  {{switchLanguages('Next' ?? '', 'بعدی' ?? '')}}</span>
                    </a>
                </li>
            @else
                <li class="page-item disabled"></li>
            @endif
        </ul>
    </nav>
@endif
