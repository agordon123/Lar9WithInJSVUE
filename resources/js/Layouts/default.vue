<template>
    <v-app dark>
      <v-main>
        <v-container>
          <AppLayout />
        </v-container>
      </v-main>
      <v-footer app>
        <span>&copy; B2D {{ new Date().getFullYear() }}</span>
      </v-footer>
    </v-app>
  </template>

  <script>
import AppLayout from './AppLayout.vue';

  export default { components: { AppLayout } };
  </script>
