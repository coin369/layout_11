

                                   
@if ($paginator->hasPages())
    <ul class="pagination">
        @if ($paginator->onFirstPage())
             <li class="disabled previous">
                 <a href="javascript:;" title="Trang trước" rel="nofollow">
                         <i class="fa fa-angle-double-left" aria-hidden="true"></i>
                 </a>
        </li>
              
@else
             <li class="previous" >
                      <a rel="prev" href="{{ $paginator->previousPageUrl() }}" title="Trang trước" rel="nofollow">
                              <i class="fa fa-angle-double-left" aria-hidden="true"></i>
                      </a>
             </li>

           
@endif


@foreach ($elements as $element)

    @if (is_string($element))
            <li class="active">
                <a class="current_page" href="javascript:;" title="{{ $element }}  " rel="nofollow">{{ $element }}</a>
            </li>
    @endif

    
    @if (is_array($element))
        @foreach ($element as $page => $url)
                @if ($page == $paginator->currentPage())
                        <li class="active">
                            <a class="current_page" href="javascript:;" rel="nofollow"><span>{{ $page }}</span></a>
                        </li>
                @else
                        <li>
                            <a href="{{ $url }}" title="{{ $page }} " rel="nofollow">
                               {{ $page }}
                            </a>
                        </li>
                @endif
                @endforeach
            @endif
        @endforeach

       
        @if ($paginator->hasMorePages())
           

                  <li class="next">
                                        <a rel="next" href="{{ $paginator->nextPageUrl() }}" title="trang sau">
                                                    <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                                                    </a>
                                                </li>
        @else

                    <li class="disabled next">
                                                    <a rel="next" href="javascript:;" title="trang sau">
                                                    <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                                                    </a>
                                                </li>
              
        @endif
    </ul>
    @endif

                                      