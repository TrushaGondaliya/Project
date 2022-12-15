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
                <a class="page-link" href="{{$missions->previousPageUrl()}}" aria-label="prevoius">
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
                    <a class="page-link" href="{{$missions->nextPageUrl()}}" aria-label="Next">
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

    $(document).ready(function(){
        $('#country_filter').on('change',function(){
            var country=$(this).val();
            var cou_name=$(this).find('option:selected').text();
            $.ajax({
                url:"{{route('home')}}",
                method:"GET",
                data:{'country':country},
                success:function(data){
                    $('#third').html(data);
                    $('#country_tag').append('<div class="mission mission-text" ><span style="padding-right: 5px;" id="country_tag">'+cou_name+ '</span><img src="/images/cancel.png" id="clear"></div>'); 
            
                }
            })
        })
    })
    
    $(document).ready(function(){
        $('#sort').on('change',function(){
            var sort=$(this).val();
            $.ajax({
                url:"{{route('home')}}",
                method:"GET",
                type:"html",
                data:{'sort':sort},
                success:function(data){
                    $('#third').html(data);
                }
            })
        })
    })

</script>

