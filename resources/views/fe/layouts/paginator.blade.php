<style>
    .pagination {
      display: inline-block;
    }
    
    .pagination a {
      color: black;
      float: left;
      padding: 8px 16px;
      text-decoration: none;
      transition: background-color .3s;
    }
    
    .pagination a.active {
      background-color: #3C91E6;
      color: white;
    }
    
    .pagination a:hover:not(.active) {background-color: #ddd;}

    a.disabled,
    fieldset[disabled] a {
    pointer-events: none;
    color: #777;
}
</style>

@if ($paginator->haspages())
<div class="pagination">
    @if ($paginator->onFirstPage())
      <a class="disabled">&laquo;</a>
    @else
    <a href="{{$paginator->previousPageUrl()}}">&laquo;</a>
        
    @endif



    @foreach ($elements as $element)
        @if (is_string($element))
            <span>{{$element}}</span>
        @endif
        @if (is_array($element))
            @foreach ($element as $page => $url)
              @if ($page == $paginator->currentPage())
                  <a class="active">{{$page}}</a>
              @else
                <a href="{{$url}}" >{{$page}}</a>   
              @endif
            @endforeach
        @endif
    @endforeach

    @if ($paginator->onLastPage())
      <a class="disabled">&raquo;</a>
    @else
    <a href="{{$paginator->nextPageUrl()}}">&raquo;</a>
    @endif
</div>
    
@endif