<script>



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

