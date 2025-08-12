<script setup lang="ts">
import { ref, onMounted } from 'vue'
import axios from 'axios'

const users = ref([])

onMounted(async () => {
    try {
        const { data } = await axios.get('/api/users') // axios utilise déjà Sanctum dans Breeze
        users.value = data
    } catch (error) {
        console.error(error)
    }
})
</script>


<template>
  <div>
    <h1 class="text-lg font-bold mb-4">Liste des utilisateurs</h1>
    <ul>
      <li v-for="user in users" :key="user.id">
        {{ user.name }} — {{ user.email }}
      </li>
    </ul>
  </div>
</template>

