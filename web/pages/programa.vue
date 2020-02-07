<template>
  <v-layout
    justify-center
    align-center
  >
    <v-flex
      cols="12"
    >
      <v-card outlined>
        <v-card-title class="headline font-weight-light">
          Escolha a banca e o orgão e depois clique em criar programa!
        </v-card-title>
        <v-card-text>
          <v-form
            ref="formulario"
            v-model="formularioValido"
          >
            <v-container>
              <v-row>
                <v-col
                  cols="12"
                  md="6"
                >
                  <v-autocomplete
                    v-model="model.orgao"
                    :items="orgaosGetter"
                    :loading="loadingOrgaos"
                    :rules="[regra.obrigatorio]"
                    item-text="nome"
                    item-value="id"
                    hide-no-data
                    chips
                    clearable
                    label="Orgão"
                    placeholder="Selecione um orgão"
                    return-object
                  />
                </v-col>
                <v-col
                  cols="12"
                  md="6"
                >
                  <v-autocomplete
                    v-model="model.banca"
                    :items="bancasGetter"
                    :loading="loadingBancas"
                    :rules="[regra.obrigatorio]"
                    item-text="nome"
                    item-value="id"
                    hide-no-data
                    chips
                    clearable
                    label="Banca"
                    placeholder="Selecione uma banca"
                    return-object
                  />
                </v-col>
              </v-row>
              <v-row>
                <programas />
              </v-row>
            </v-container>
          </v-form>
        </v-card-text>
        <v-divider />
        <v-card-actions>
          <v-spacer />
          <v-btn
            @click="limparProgramas()"
            color="orange darken-2"
            nuxt
            dark
          >
            Limpar programas
          </v-btn>
          <v-btn
            @click="limparFormulario()"
            color="secondary"
            dark
            nuxt
          >
            Limpar formulário
          </v-btn>
          <v-btn
            :disabled="!formularioValido || loadingAssuntos"
            :loading="loadingAssuntos"
            @click="buscarAssuntos()"
            color="primary"
            nuxt
          >
            Criar programa
          </v-btn>
        </v-card-actions>
      </v-card>
    </v-flex>
  </v-layout>
</template>

<script>
import { mapGetters } from 'vuex';

import programas from '../components/Programa/Programas';

const MODEL_DEFAULT = {
  banca: {},
  orgao: {},
  assuntos: []
}

export default {
  components: { programas },

  data () {
    return {
      formularioValido: false,
      model: MODEL_DEFAULT,
      loadingBancas: false,
      loadingOrgaos: false,
      loadingAssuntos: false,
      regra: {
        obrigatorio: v => !!v || 'Este campo é obrigatório'
      }
    };
  },

  computed: {
    ...mapGetters({
      orgaosGetter: 'orgao/orgaosGetter',
      bancasGetter: 'banca/bancasGetter'
    })
  },

  mounted () {
    this.buscarOrgaos();
    this.buscarBancas();
  },

  destroyed () {
    this.limparProgramas();
  },

  methods: {
    buscarOrgaos () {
      this.loadingOrgaos = true;
      return this.$store
        .dispatch('orgao/buscar')
        .finally(() => (this.loadingOrgaos = false))
    },

    buscarBancas () {
      this.loadingBancas = true;
      return this.$store
        .dispatch('banca/buscar')
        .finally(() => (this.loadingBancas = false))
    },

    buscarAssuntos () {
      if (!this.$refs.formulario.validate()) {
        return;
      }
      this.loadingAssuntos = true;

      const params = {
        orgao_id: this.model.orgao.id,
        banca_id: this.model.banca.id
      }

      return this.$store
        .dispatch('assunto/buscar', params)
        .then((data) => {
          this.salvarPrograma(data);
        })
        .finally(() => (this.loadingAssuntos = false))
    },

    salvarPrograma (assuntos) {
      const modelo = Object.assign({}, this.model, { assuntos });
      this.$store.dispatch('programa/setPrograma', modelo);
      this.limparFormulario();
    },

    limparProgramas () {
      return this.$store.dispatch('programa/limparProgramas');
    },

    limparFormulario () {
      this.$refs.formulario.reset();
    }
  }
}
</script>
