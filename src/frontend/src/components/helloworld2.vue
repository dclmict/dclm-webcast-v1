<template>
    <relatedvideo v-for="g in vPage1" :g="g" :key="g.id.videoId">
  
    </relatedvideo>
  </template>
  
  <script>
  import relatedvideo from './relatedvideo.vue';
      export default {
          props: ['vPage1'], 
          components: {
              relatedvideo
          }
      }
  </script>