<template>
  <v-expansion-panels
    inset
    focusable
  >
    <v-expansion-panel
      v-for="(programa, index) in programasGetter"
      :key="index"
    >
      <v-expansion-panel-header
        class="font-weight-bold"
      >
        {{ programa.banca.nome }} - {{ programa.orgao.nome }} ({{ programa.orgao.sigla }})
      </v-expansion-panel-header>
      <v-expansion-panel-content>
        <v-treeview
          :items="filtrarAssuntoSemQuestao(programa.assuntos)"
          item-key="id"
          item-text="nome"
          item-children="filhos"
          open-on-click
          activatable
          selected-color="success"
        >
          <template v-slot:label="{ item, open }">
            <v-icon>
              {{ open ? 'mdi-folder-open' : 'mdi-folder' }}
            </v-icon>
            <span class="font-weight-bold">{{ item.nome }}</span>
            <v-chip
              class="ma-2"
              label
              outlined
              :color="item.quantidade > 0 ? 'green': 'false'"
            >
              {{ item.quantidade }} questões
            </v-chip>
          </template>
        </v-treeview>
      </v-expansion-panel-content>
    </v-expansion-panel>
  </v-expansion-panels>
</template>

<script>
import { mapGetters } from 'vuex';

export default {
  name: 'Programas',

  computed: {
    ...mapGetters({
      programasGetter: 'programa/programasGetter'
    })
  },

  methods: {
    filtrarAssuntoSemQuestao (assuntos) {
      return assuntos.filter(assunto => assunto.quantidade > 0);
    }
  }
}
</script>
