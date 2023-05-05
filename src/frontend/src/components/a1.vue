<template>
  <div class="video anim"  style="--delay: .4s" @click="videoContent">
     <div class="video-time">8 min</div>
     <div class="video-wrapper">
        <img class="source" v-bind:src="videoImage" v-bind:alt="videoTitle" />
      <div class="author-img__wrapper video-author">
       <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check">
        <path d="M20 6L9 17l-5-5" />
       </svg>
       <img class="author-img" v-bind:src="videoImage" v-bind:alt="videoTitle" />
      </div>
    </div>
     <div class="video-by">Pastor W.F Kumuyi</div>
     <div class="video-name">{{ videoTitle }}</div>
     <div class="video-view">54K views<span class="seperate video-seperate"></span>{{ videoTime }}</div>
    </div>
</template>

<script>
  export default {
    props: ['r'], 
 
    computed: {
        videoTitle(){
            return this.r.snippet.title;
        },
     
        videoImage(){ 
            return this.r.snippet.thumbnails.medium.url;
                  },
        videoContent(){
          var id = this.r.snippet.resourceId.videoId;
          var url = 'https://www.youtube.com/embed/'+id;
          var description =  this.r.snippet.description;
          var title = this.r.snippet.title;
          var person = 'Pastor W.F Kumuyi';
          var img = this.r.snippet.thumbnails.medium.url;
          $(".video-stream video").stop();
          $(".my_video_1").attr("src", url);
          $(".video-stream video").load();
          $(".video-p-title").text(title);
          $(".video-p-subtitle").text(description);
          $(".video-p-name").text(person);
          $(".video-detail .author-img").attr("src", img);
        },
        videoTime(){
            return this.r.snippet.publishedAt;
        },
       
    },
    methods: {
      test(){
        $(".sidebar-link").click(function () {
          $(".sidebar-link").removeClass("is-active");
          $(this).addClass("is-active");
        });
        
        
        $(window)
        .resize(function () {
          if ($(window).width() > 1090) {
          $(".sidebar").removeClass("collapse");
          } else {
          $(".sidebar").addClass("collapse");
          }
        })
        .resize();
        
        $(".logo, .logo-expand, .discover").on("click", function (e) {
          $(".main-container").removeClass("show");
          $(".main-container").scrollTop(0);
        });
        $(".trending, .video").on("click", function (e) {
          $(".main-container").addClass("show");
          $(".main-container").scrollTop(0);
          $(".sidebar-link").removeClass("is-active");
          $(".trending").addClass("is-active");
        });
        
      }
    },
    mounted(){
           this.test()
        }
  }
</script>
