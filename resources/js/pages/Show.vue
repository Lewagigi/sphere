<script setup>
//import Layout from './Layout'
import { Link, Head } from '@inertiajs/vue3'
defineProps({ user: Object })
</script>


<template>
  <Layout>
    
    <Head title="users" />
    

    <div v-for="user in users" :key="user.id">
        {{ user.name }}
      kfkkf
      <Link :href="`/users/${user.id}`">
           
        {{ user.name }}

      </Link>
      
      <div>{{ user.email }}</div>
    </div>
  </Layout>
</template>