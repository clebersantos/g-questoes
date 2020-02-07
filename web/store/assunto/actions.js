import * as service from '../../service/assunto';
import * as types from './types';

export const buscar = ({ commit }, params) => service
  .buscar(params)
  .then(({ data }) => {
    commit(types.SET_ASSUNTOS, data);
    return data;
  });
