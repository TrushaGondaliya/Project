<x-header></x-header>
  
    <link rel="stylesheet" href="{{url('css/index.css')}}">
    <div id="third">
 <div id="extra">
    @include('extra')
 </div>

    <div id="filter">
        @include('filter')
    </div>
    
    


    <br><br>
    <div class="container mt-3">
        <ul class="pagination">
            <li class="page-item">
                <a class="page-link" href="{{url('home?page='.$missions->onFirstPage())}}" aria-label="prevoius">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>
            <li class="page-item">
               
                <a class="page-link" aria-disabled="false" href="{{$missions->previousPageUrl()}}" aria-label="prevoius">
                    <span aria-hidden="true">&lsaquo;</span>
                </a>
            </li>
            @for($i=1;$i<=$missions->lastpage();$i++) 
            @if($i==$missions->currentPage())
            <li class="page-item"><a class="page-link active" href="{{url('home?page='.$i)}}">{{$i}}</a> </li>
            @else
            <li class="page-item"><a class="page-link" href="{{url('home?page='.$i)}}">{{$i}}</a> </li>
            @endif
            @endfor
                <li class="page-item">
                    
                   
                    <a class="page-link" aria-disabled="false" href="{{$missions->nextPageUrl()}}" aria-label="Next">
                      
                   
                        <span aria-hidden="true">&rsaquo;</span>
                    </a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="{{url('home?page='.$missions->lastpage())}}" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
        </ul>
    </div>

   

<br>
<hr>
<x-footer></x-footer>
<br>
</div>





<script>
    var msg = '{{Session::get("message")}}';
    var exist = '{{Session::has("message")}}';
    if (exist) {
        alert(msg);
    }

   

</script>

