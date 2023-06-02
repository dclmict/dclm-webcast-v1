<template>

    <div class="chat-vid anim" style="--delay: .5s" @click="videoContent">
     <div class="chat-vid__wrapper">
      <img class="chat-vid__img" v-bind:src="videoImage" v-bind:alt="videoTitle" />
      <div class="chat-vid__content">
       <div class="chat-vid__name">{{ videoTitle }}</div>
       <div class="chat-vid__by">Pastor W.F Kumuyi</div>
       <div class="chat-vid__info">125.908 views <span class="seperate"></span>{{ videoTime }}</div>
      </div>
     </div> 
    </div>
    

</template>

<script>
export default {
  props: ['g'], 

  computed: {

      videoTitle(){
          return this.g.snippet.title;
      },
   
      videoImage(){ 
          return this.g.snippet.thumbnails.medium.url;
                },
      videoContent(){
        var id = this.g.snippet.resourceId.videoId;
        var url = 'https://www.youtube.com/embed/'+id;
        var description =  this.g.snippet.description;
          var title = this.g.snippet.title;
          var person = 'Pastor W.F Kumuyi';
          var img = this.g.snippet.thumbnails.medium.url;
          $(".video-stream video").stop();
          $(".my_video_1").attr("src", url);
          $(".video-stream video").load();
          $(".video-p-title").text(title);
          $(".video-p-subtitle").text(description);
          $(".video-p-name").text(person);
          $(".video-detail .author-img").attr("src", img);
      },
      videoTime(){
          return this.g.snippet.publishedAt;
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

}
</script>
