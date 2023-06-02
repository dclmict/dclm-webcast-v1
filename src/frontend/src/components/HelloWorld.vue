<template>
  <a1 v-for="r in vPage" :r="r" :key="r.id.videoId">

  </a1>
</template>

<script>
import a1 from './a1.vue';
    export default {
        props: ['vPage'], 
        components: {
            a1
        }
    }
</script>
