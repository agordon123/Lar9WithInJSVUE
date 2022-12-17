<template>
    <v-app v-resize="onResize">
      <Navigation />
      <v-main>
        <v-container fluid>
          <AppLayout />
        </v-container>
      </v-main>
      <!--<v-footer app color="accent">
        <span>&copy; {{ new Date().getFullYear() }}</span>
      </v-footer>-->
    </v-app>
  </template>

  <script>
import AppLayout from './AppLayout.vue';

  export default {
    data: () => ({
        windowSize: {
            x: 0,
            y: 0,
        },
    }),
    mounted() {
        this.onResize();
    },
    methods: {
        onResize() {
            this.windowSize = { x: window.innerWidth, y: window.innerHeight };
        },
    },
    components: { AppLayout }
};
  </script>
