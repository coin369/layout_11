 <div class="pagination-bx clearfix text-center">
                              
                                   
@if ($paginator->hasPages())
     <ul class="pagination text-center">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
             <li class="page-item disabled previous"><a href="javascript:;" title="Trang trước" rel="nofollow">
            <<
           </a></li>
              
@else
             <li class="page-item previous" >
                      <a rel="prev" href="{{ $paginator->previousPageUrl() }}" title="Trang trước" rel="nofollow">
                         <<
                      </a>
                                                </li>

           
@endif


@foreach ($elements as $element)

    @if (is_string($element))
            <li class=" page-item active">
                <a class="current_page" href="javascript:;" title="{{ $element }}  " rel="nofollow">{{ $element }}</a>
            </li>
    @endif

    
    @if (is_array($element))
        @foreach ($element as $page => $url)
                @if ($page == $paginator->currentPage())
                        <li class=" page-item active">
                            <a class="current_page" href="javascript:;" rel="nofollow"><span>{{ $page }}</span></a>
                        </li>
                @else
                        <li class="page-item">
                            <a href="{{ $url }}" title="{{ $page }} " rel="nofollow">
                               {{ $page }}
                            </a>
                        </li>
                @endif
                @endforeach
            @endif
        @endforeach

       
        @if ($paginator->hasMorePages())
           

                  <li class="page-item next">
                                                    <a rel="next" href="{{ $paginator->nextPageUrl() }}" title="trang sau">
                                                           >>
                                                    </a>
                                                </li>
        @else

                    <li class="page-item disabled next">
                                                    <a rel="next" href="javascript:;" title="trang sau">
                                                       >>
                                                    </a>
                                                </li>
              
        @endif
    </ul>
    @endif

                            </div>
                                 