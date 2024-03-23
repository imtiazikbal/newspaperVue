<script setup>
defineProps({
   mainnews2: Object
})

</script>

<template>
<div v-for="news in mainnews2.news" :key="news.id" class="col-6 cbr-2"> 
    <div class="headNews">

      <span class="text-center"><a class="text-center" :href="`/news/get-news-by-title/${news.id}`"> {{ news.title }}</a></span>
      <a :href="`/news/get-news-by-title/${news.id}`" ><img :src="news.image" alt="{{ news.title }}" width="20%"></a>
  
     </div>
     <div class="headNews_body">
        <span><a :href="`/news/get-news-by-title/${news.id}`" v-html="news.nBody.substr(0, 150)"></a></span>

     </div>
</div>
</template>

<style></style>