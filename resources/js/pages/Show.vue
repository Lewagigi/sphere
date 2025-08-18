<script setup lang="ts">
defineProps({
  users: Array
})
</script>

<template>
  <div class="p-8">
    <h1 class="text-3xl font-bold mb-6 text-gray-800">Liste des utilisateurs</h1>

    <div class="overflow-x-auto bg-white shadow-md rounded-lg">
      <table class="min-w-full border border-gray-200">
        <thead class="bg-gray-100">
          <tr>
            <th class="px-6 py-3 text-left text-sm font-semibold text-gray-600">ID</th>
            <th class="px-6 py-3 text-left text-sm font-semibold text-gray-600">Nom</th>
            <th class="px-6 py-3 text-left text-sm font-semibold text-gray-600">Email</th>
            <th class="px-6 py-3 text-left text-sm font-semibold text-gray-600">Créé le</th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="user in users" :key="user.id" class="border-b hover:bg-gray-50">
            <td class="px-6 py-4 text-sm text-gray-700">{{ user.id }}</td>
            <td class="px-6 py-4 text-sm text-gray-700">{{ user.name }}</td>
            <td class="px-6 py-4 text-sm text-gray-700">{{ user.email }}</td>
            <td class="px-6 py-4 text-sm text-gray-500">
              {{ new Date(user.created_at).toLocaleDateString() }}
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</template>
