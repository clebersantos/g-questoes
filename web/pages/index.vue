<template>
  <v-layout
    justify-center
    align-center
  >
    <v-flex
      xs12
      sm8
      md6
    >
      <v-card>
        <v-card-title class="headline font-weight-light">
          Bem-vindo(a) ao sistema de questões!
        </v-card-title>
        <v-card-text>
          <p>Agora você pode criar programas de estudos diversos!</p>
          <p>
            Encontrou um bug? Você pode reportar uma <a
              href="https://github.com/clebersantos/g-questoes/issues"
              target="_blank"
              title="reportar"
            >issue no meu GitHub
            </a>.
          </p>
          <div class="text-xs-right">
            <em><small>&mdash; Cleber Santos</small></em>
          </div>
          <hr class="my-3">
        </v-card-text>
        <v-card-actions>
          <v-spacer />
          <v-btn
            color="primary"
            nuxt
            to="/programa"
          >
            Acessar página de programas
          </v-btn>
        </v-card-actions>
      </v-card>
    </v-flex>
  </v-layout>
</template>

<script>

export default {
}
</script>
