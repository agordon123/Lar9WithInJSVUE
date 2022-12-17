<template>
  <v-app dark>
    <div class="error404">
      <div class="errorChild404">
        <div v-if="error.statusCode === 404">
          <v-col :style="{ 'max-width': '50%' }">
            <v-img fluid contain src="/logo.png"></v-img>
          </v-col>
          <h1>
            {{ pageNotFound }}
          </h1>
        </div>
        <h1 v-else>
          {{ otherError }}
        </h1>

        <NavLink to="/">
          <div class="error404auto">
            <v-icon color="primary" dark large> mdi-home </v-icon>
            <div class="errorText">Home Page</div>
          </div>
        </NavLink>
      </div>
    </div>
  </v-app>
</template>

<script>
import {NavLink} from ''
export default {
  layout: "empty",
  props: {
    error: {
      type: Object,
      default: null,
    },
  },
  data() {
    return {
      pageNotFound: "No page found. Sorry.",
      otherError: "An error occurred",
    };
  },
  head() {
    const title = this.error.statusCode === 404 ? this.pageNotFound : this.otherError;
    return {
      title,
    };
  },
};
</script>

<style scoped>
h1 {
  font-size: 20px;
}
.error404 {
  display: flex;
  justify-content: center;
}
.error404auto {
  display: flex;
}
.errorText {
  font-size: 22px;
  font-weight: bold;
  margin-left: 10px;
}
</style>
