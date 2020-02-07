import * as types from './types';

export const setPrograma = ({ commit }, programa) => {
  commit(types.SET_PROGRAMA, programa);
}

export const limparProgramas = ({ commit }) => {
  commit(types.SET_PROGRAMAS, []);
}
