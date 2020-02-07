import * as types from './types';

export default {
  [types.SET_BANCAS] (state, dados) {
    state.bancas = dados;
  }
};
