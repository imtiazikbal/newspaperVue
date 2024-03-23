<script setup>
defineProps({
    mainnews: Object
})
</script>
<template>
 <div class="col-12">
                        <div class="mainNews" v-for="news in mainnews.news" :key="news.id">
                            <div class="sec-1 d-flex">
                                <div class="mainImage mr-2">
                                    <a :href="`/news/get-news-by-title/${news.id}`"><img :src="news.image" alt=""></a>
                                    <span><a :href="`/news/get-news-by-title/${news.id}`">{{ news.nCaption }}</a></span>
                                </div> 
                             <div class="sec-2 mainText">
                                 <span><a :href="`/news/get-news-by-title/${news.id}`"> {{ news.title }}</a></span>
                                <h6><a :href="`/news/get-news-by-title/${news.id}`" v-html="news.nBody.substr(0, 150)"></a></h6>
                                <h6 class="mt-3">১ ঘণ্টা আগে</h6>
                            </div>      
                            </div>
                        </div>
                    </div>
</template>
<style>
</style>