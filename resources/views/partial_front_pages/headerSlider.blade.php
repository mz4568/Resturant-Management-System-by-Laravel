          
          @foreach($sliders as $key=>$slider)
          <div class="item">
                <div class="container">
                    <div class="header-content">
                        <h1 class="header-title">{{$slider->title}}</h1>
                        <p class="header-sub-title">{{$slider->sub_title}}</p>
                        
                    </div> <!-- /.header-content -->
                </div>
            </div>
           @endforeach