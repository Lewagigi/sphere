<script setup lang="ts">
defineProps({
  users: Array
})
</script>

<template>
  <div class="p-6">
    <h1 class="text-2xl font-bold mb-4">Liste des utilisateurs</h1>

    <ul>
      <li v-for="user in users" :key="user.id" class="mb-2">
        {{ user.name }} - {{ user.email }}
      </li>
    </ul>
  </div>
</template>
