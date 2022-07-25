<div class="col-md-6 col-lg-4 blog-box">
  <div class="blog-box-content mx-auto">
      @php
          echo get_the_post_thumbnail();
      @endphp
      <div class="time-box">
          <span>
              <span><i class="fas fa-calendar mr-1"></i></span>
              <span>{{get_the_date("d M Y")}}</span>
          </span>
          <span>
              <span><i class="fas fa-hourglass-half mr-1"></i></span>
              <span>
                {{human_time_diff( get_post_time(), time())}}
              </span>
          </span>
      </div>
      
      <h5>{{the_title()}}</h5>
      {{the_excerpt()}}
  </div>
</div>