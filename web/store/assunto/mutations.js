import * as types from './types';

export default {
  [types.SET_ASSUNTOS] (state, dados) {
    state.assuntos = dados;
  }
};
