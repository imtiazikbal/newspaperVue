<script setup>
import { Link } from '@inertiajs/vue3';

defineProps({
    mainnews:Object
})
</script>
<template>
                
                <div v-for="news in mainnews.news" :key="news.id" class="col-md-12 col-12 d-flex justify-content-evenly ">
                   <Link class="main_section1_image">
                   <img :src="'/' + news.image"  alt="" width="320px" height="200px"> 
                   <span class="d-block">{{ news.nCaption }}</span>
                   </Link>
                   <Link class="main_section1_content">
                    <h2> {{ news.title }}</h2> 
                    <span class="d-block">{{ news.created_at }}</span>
                   </Link>
                </div>

</template>
<style>

.main_section1_image span{
    font-size: 12px;
    color: black;

}
</style>