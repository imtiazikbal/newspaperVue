
<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
import { Link } from '@inertiajs/vue3';
import Notification from '@/Components/Notification.vue';

defineProps({
  news: Object
})

// const form = reactive({
//   image_path :  '',
//   id :  '',
// })
// const submit = () => {
//   let id = form.id;
//   if (confirm('Are you sure you want to delete this news?')) {
//     router.post('destroy/news/'+id, form)
//   }
// }

</script>

<template>
    <Head title="All News" />

    <AuthenticatedLayout>
        <template #header>
           All News
           
        </template>
        <div v-if="$page.props.flash.success" class="absolute top-8 right-10 z-10">
           <Notification :message="$page.props.flash.success"/>
           </div>

           <div v-if="$page.props.flash.warning" class="absolute top-8 right-10 z-10">
            <Notification :message="$page.props.flash.warning"/>
           </div>
  
<div class="w-screen">
  
<div class="mt-8   max-w-screen-lg px-2">
  <div class="sm:flex sm:items-center sm:justify-between flex-col sm:flex-row">
    <p class="flex-1 text-base font-bold text-gray-900">News</p>

    <div class="mt-4 sm:mt-0">
      <div class="flex items-center justify-start sm:justify-end">
        

        <Link href="/create/news" type="button" class="inline-flex cursor-pointer items-center rounded-lg border border-gray-400 bg-white py-2 px-3 text-center text-sm font-medium text-gray-800 shadow hover:bg-gray-100 focus:shadow">
          <svg class="mr-1 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" class=""></path>
          </svg>
Add News
        </Link>
      </div>
    </div>
  </div>

  <div class="mt-6 overflow-hidden bg-white rounded-xl border shadow">
    <table class="min-w-full border-separate border-spacing-y-2 border-spacing-x-2">
      <thead class="hidden border-b lg:table-header-group">
        <tr class="">
          <td width="50%" class="whitespace-normal py-4 text-sm font-medium text-gray-500 sm:px-6">News Image</td>

          <td class="whitespace-normal py-4 text-sm font-medium text-gray-500 sm:px-6">Titile</td>
          <td class="whitespace-normal py-4 text-sm font-medium text-gray-500 sm:px-6">Body</td>
          <td class="whitespace-normal py-4 text-sm font-medium text-gray-500 sm:px-6">Category</td>
          <td class="whitespace-normal py-4 text-sm font-medium text-gray-500 sm:px-6">Status</td>
          <td class="whitespace-normal py-4 text-sm font-medium text-gray-500 sm:px-6">Action</td>
          <td class="whitespace-normal py-4 text-sm font-medium text-gray-500 sm:px-6">Action</td>
        </tr>
      </thead>

      <tbody class="lg:border-gray-300">
        <tr v-for="news in news" :key="news.id" class="">
          <td width="50%" class="whitespace-no-wrap py-4 text-sm font-bold text-gray-900 sm:px-6">
            <img :src="'/' + news.image" alt="" class="h-12 w-12 rounded-full object-cover" />
            
          </td>

          <td class="whitespace-no-wrap hidden py-4 text-sm font-normal text-gray-500 sm:px-6 lg:table-cell">{{ news.title.substring(0, 20) }}</td>

          <td class="whitespace-no-wrap py-4 px-6 text-right text-sm text-gray-600 lg:text-left">
            {{ news.nBody.substring(0, 50) }}
           
          </td> 
          <td class="whitespace-no-wrap py-4 px-6 text-right text-sm text-gray-600 lg:text-left">
           {{ news.category.cName }}
           
          </td> 
          <td class="whitespace-no-wrap py-4 px-6 text-right text-sm text-gray-600 lg:text-left">
        
           
          </td> 
          

          <td class="whitespace-no-wrap hidden py-4 text-sm font-normal text-gray-500 sm:px-6 lg:table-cell">
            <div class="inline-flex items-center rounded-full bg-blue-600 py-2 px-3 text-xs text-white">{{ news.status=='published'?'Published':'Unpublished' }}</div>
          </td>
          <td class="hidden py-4 text-sm font-normal text-gray-500 sm:px-6 lg:table-cell">
            <Link  :href="`/edit/news/${news.id}`" class="btn btn-primary">Edit</Link>
            </td>
            <td class="hidden py-4 text-sm font-normal text-gray-500 sm:px-6 lg:table-cell">
            <Link method="delete"  :href="`/destroy/news/${news.id}`" class="btn btn-primary">Delete</Link>
             
              <!-- <form  @submit.prevent="submit">
                <input type="hidden"  v-model="form.image_path" value="news.image">
                <input type="hidden"  v-model="form.id" value="news.id">
                <button type="submit" class="btn btn-danger">Delete</button>
              </form> -->

            </td>
        </tr>

       
      </tbody>
    </table>
  </div>
</div>

</div>
    
       
    </AuthenticatedLayout>
</template>