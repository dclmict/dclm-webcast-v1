<script setup>
import HelloWorld2 from './HelloWorld2.vue';
import relatedvideo from './relatedvideo.vue';
</script>

<template>
    <div class="stream-area">
     <div class="video-stream">
       <iframe class="my_video_1" src="" width="640px" height="414px" style="border-radius:20px;" controls preload="none" poster="" data-setup='{ "aspectRatio":"940:620", "playbackRates": [1, 1.5, 2] }'>
        </iframe>
      <div class="video-detail">
       <div class="video-content">
        <div class="video-p-wrapper anim" style="--delay: .1s">
         <div class="author-img__wrapper video-author video-p">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check">
           <path d="M20 6L9 17l-5-5" />
          </svg>
          <img class="author-img" src="" />
         </div>
 
         <div class="video-p-detail">
          <div class="video-p-name"></div>
          <div class="video-p-sub">1,980,893 subscribers</div>
         </div>
         <div class="button-wrapper">
          <button class="like">
           <svg viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path d="M21.435 2.582a1.933 1.933 0 00-1.93-.503L3.408 6.759a1.92 1.92 0 00-1.384 1.522c-.142.75.355 1.704 1.003 2.102l5.033 3.094a1.304 1.304 0 001.61-.194l5.763-5.799a.734.734 0 011.06 0c.29.292.29.765 0 1.067l-5.773 5.8c-.428.43-.508 1.1-.193 1.62l3.075 5.083c.36.604.98.946 1.66.946.08 0 .17 0 .251-.01.78-.1 1.4-.634 1.63-1.39l4.773-16.075c.21-.685.02-1.43-.48-1.943z" />
           </svg>
           Share
          </button>
          <button class="like red">
           <svg viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M15.85 2.5c.63 0 1.26.09 1.86.29 3.69 1.2 5.02 5.25 3.91 8.79a12.728 12.728 0 01-3.01 4.81 38.456 38.456 0 01-6.33 4.96l-.25.15-.26-.16a38.093 38.093 0 01-6.37-4.96 12.933 12.933 0 01-3.01-4.8c-1.13-3.54.2-7.59 3.93-8.81.29-.1.59-.17.89-.21h.12c.28-.04.56-.06.84-.06h.11c.63.02 1.24.13 1.83.33h.06c.04.02.07.04.09.06.22.07.43.15.63.26l.38.17c.092.05.195.125.284.19.056.04.107.077.146.1l.05.03c.085.05.175.102.25.16a6.263 6.263 0 013.85-1.3zm2.66 7.2c.41-.01.76-.34.79-.76v-.12a3.3 3.3 0 00-2.11-3.16.8.8 0 00-1.01.5c-.14.42.08.88.5 1.03.64.24 1.07.87 1.07 1.57v.03a.86.86 0 00.19.62c.14.17.35.27.57.29z" />
           </svg>
           Liked
          </button>
         </div>
        </div>
        <div class="video-p-title anim" style="--delay: .2s"></div>
        <div class="video-p-subtitle anim" style="--delay: .3s"></div>
       </div>
      </div>
     </div>
     <div class="chat-stream">
      <div class="chat">
        <div class="msg-details chat-content-div">
            <div class="chat-header anim">
                Live Chat
                <span>
                <p class="msg-option msg-option-chat" @click="next('msg-content')">Details</p>
                <svg viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.212 7.762c0 2.644-2.163 4.763-4.863 4.763-2.698 0-4.863-2.119-4.863-4.763C4.486 5.12 6.651 3 9.35 3c2.7 0 4.863 2.119 4.863 4.762zM2 17.917c0-2.447 3.386-3.06 7.35-3.06 3.985 0 7.349.634 7.349 3.083 0 2.448-3.386 3.06-7.35 3.06C5.364 21 2 20.367 2 17.917zM16.173 7.85a6.368 6.368 0 01-1.137 3.646c-.075.107-.008.252.123.275.182.03.369.048.56.052 1.898.048 3.601-1.148 4.072-2.95.697-2.675-1.35-5.077-3.957-5.077a4.16 4.16 0 00-.818.082c-.036.008-.075.025-.095.055-.025.04-.007.09.019.124a6.414 6.414 0 011.233 3.793zm3.144 5.853c1.276.245 2.115.742 2.462 1.467a2.107 2.107 0 010 1.878c-.531 1.123-2.245 1.485-2.912 1.578a.207.207 0 01-.234-.232c.34-3.113-2.367-4.588-3.067-4.927-.03-.017-.036-.04-.034-.055.002-.01.015-.025.038-.028 1.515-.028 3.145.176 3.747.32z" />
                </svg>
                15,988 people
                </span>
            </div>
            <!-- <div class="message-container">
                <div class="message anim" style="--delay: .1s">
                    <div class="author-img__wrapper video-author video-p">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check">
                        <path d="M20 6L9 17l-5-5" />
                        </svg>
                        <img class="author-img" src="https://images.unsplash.com/photo-1560941001-d4b52ad00ecc?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1650&q=80" />
                    </div>
                    <div class="msg-wrapper">
                        <div class="msg__name video-p-name"> Wijaya Adabi</div>
                        <div class="msg__content video-p-sub"> Lorem ipsum clor sit, ame conse quae debitis</div>
                    </div>
                </div>
            </div>
            <div class="chat-footer anim" style="--delay: .1s">
                <input type="text" placeholder="Write your message">
            </div> -->
           <div class="chat-modal">
                <div class="chat-modal-in">
                    <form action="/../../chat.html">
                        <div class="form-field"><h3>Join Chat</h3></div>
                        <div class="form-field">
                            <label>Display name</label>
                            <input type="text" name="name" autofocus>
                        </div>
                        <div class="form-field">
                            <label>Room name</label>
                            <input type="text" name="room" autofocus>
                        </div>
                        <div class="form-field">
                            <button>Join</button>
                        </div>
                    </form>
                </div>
           </div>


        </div>
        <div class="msg-details msg-content">
            <p class="msg-option" @click="next('chat-content-div')">Live Chat</p>
            <p class="msg-p">Message Title</p>
            <p class="msg-p">Speaker: W.F. Kumuyi</p>
            <p class="msg-p">Event Name: Leaders' Development</p>
            <p class="msg-p">Event Tag</p>
            <p class="msg-p">Event Date: May 2, 2023</p>
            <p class="msg-p">Event Venue: DCLM HQ</p>
            <p class="msg-p">Event Materials</p>
        </div>
      </div>

      <div class="chat-vid__container">
    <div class="chat-vid__title anim" style="--delay: .3s">Related Videos</div>
  
        <HelloWorld2 :vPage1="related_videos"> </HelloWorld2>

        <div class="chat-vid__button anim" style="--delay: .6s">See All related videos (32)</div>
      </div>

     </div>
    </div>
</template>


<script>
    import axios from 'axios';
    // import { google } from 'googleapis';

    var api_key= import.meta.env.VITE_API_KEY;
    var channelId= import.meta.env.VITE_API_CHANNELID;
    var playlistId = import.meta.env.VITE_API_PLAYLISTID; 

    var maxResults = '3'
    export default { 
        created() {
            this.vidload();
        },
        name: 'dclm webcast related video',
        data(){
            return{
                related_videos: [],
            }
        },
        mounted() {
            console.log("related video called.......")
        },
        methods: {
          
            vidload ()
                {
                var page = `https://youtube.googleapis.com/youtube/v3/playlistItems?part=snippet&playlistId=${playlistId}&maxResults=${maxResults}&order=viewCount&key=${api_key}`;
                axios.get(page).then(
                    ({data})=>{
                    this.related_videos = data.items;
                    }
                )
                .catch(function (error) {
                    if (error.response) {
                        let { status, statusText } = error.response;
                        console.log(status, statusText);
                        console.log(error);
                    } else console.log(error);
                })
            },
            next(get){
                $('.msg-details').hide();
                $('.'+get).show();   
            }
        },
       
    }
</script>