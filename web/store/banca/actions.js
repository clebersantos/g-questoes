import * as service from '../../service/banca';
import * as types from './types';

export const buscar = ({ commit }, params) => service
  .buscar(params)
  .then(({ data }) => {
    commit(types.SET_BANCAS, data);
    return data.data;
  });
