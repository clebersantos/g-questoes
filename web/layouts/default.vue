<template>
  <v-app>
    <v-app-bar
      fixed
      app
      elevation="1"
    >
      <v-toolbar-title v-text="title" />
      <v-spacer />
    </v-app-bar>
    <v-content>
      <v-container>
        <nuxt />
      </v-container>
    </v-content>

    <v-footer
      :fixed="fixed"
      app
    >
      <span>&copy; 2019</span>
    </v-footer>
  </v-app>
</template>

<script>
export default {
  data () {
    return {
      fixed: false,
      right: true,
      rightDrawer: false,
      title: 'Programa de estudos'
    }
  }
}
</script>
