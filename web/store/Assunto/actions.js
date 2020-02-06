import * as assuntoService from '../../service/assunto';
import * as types from './types';

export const buscar = ({ commit }, params) => assuntoService
  .buscar(params)
  .then(({ data }) => {
    commit(types.SET_ASSUNTOS, data.data);
    return data.data;
  });
