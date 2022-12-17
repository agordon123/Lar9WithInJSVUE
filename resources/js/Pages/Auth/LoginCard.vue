<template #applayout>
    <div class="bg-dark">
        <v-btn @click="welcomeCard" class="Login">Log in</v-btn>
      <v-container>
        <v-row justify="center">
          <v-col cols="auto" class="mb-4">
            <Logo />
          </v-col>
        </v-row>
        <v-row justify="center">
          <v-col cols="auto" class="mt-4 w-50">
            <v-card elevation="2" width="500">

                <div v-if="logInCard == false">
                    <h1 class="Header">Coming Soon...</h1>
                </div>

                <div v-if="logInCard == true">
              <v-card-text>
                <v-form @submit.prevent="userLogin">
                  <div v-if="error">{{ error }}</div>
                  <v-text-field
                    label="Username"
                    id="username"
                    name="username"
                    v-model="login.username"
                  />
                  <v-text-field
                    label="Password"
                    type="password"
                    id="password"
                    name="password"
                    v-model="login.password"
                  />
                  <div>
                    <v-btn class="mr-4" type="submit" :disabled="isSubmitDisabled"> Submit </v-btn>
                  </div>
                </v-form>
              </v-card-text>
              </div>
            </v-card>
          </v-col>
        </v-row>
      </v-container>
    </div>
  </template>

  <script>
  export default {
    data() {
      return {
          logInCard:false,
        login: {
          username: "",
          password: "",
        },
        isSubmitDisabled: false,
        error: null,
      };
    },
    methods: {
        welcomeCard(){
            this.logInCard = true;
        },
      async userLogin() {
        this.error = null;
        this.isSubmitDisabled = true;
        try {
          await this.$auth
            .loginWith("local", {
              data: this.login,
            })
            .then(() => {
              this.$auth.redirect('home')
            });
        } catch (err) {
          console.log(err.response);
          this.error = err.response.data.error;
          this.isSubmitDisabled = false;
        }
      },
    },
  };
  </script>
  <style scoped>
  .Header{
      text-align:center;
      color: #555555;
      font-family: Garamond;
  }
  .Login{
      float: right;
  }

  </style>
