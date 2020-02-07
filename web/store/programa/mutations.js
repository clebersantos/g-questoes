import * as types from './types';

export default {
  [types.SET_PROGRAMAS] (state, programas) {
    state.programas = programas;
  },
  [types.SET_PROGRAMA] (state, programa) {
    state.programas.push(programa);
  }
};
