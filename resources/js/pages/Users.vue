<script setup lang="ts">



const users = ref([])

onMounted(async () => {
    try {
        // Axios est déjà configuré dans Breeze pour utiliser Sanctum
        const { data } = await axios.get('/api/users')
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
