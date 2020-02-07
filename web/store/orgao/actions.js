import * as service from '../../service/orgao';
import * as types from './types';

export const buscar = ({ commit }, params) => service
  .buscar(params)
  .then(({ data }) => {
    commit(types.SET_ORGAOS, data);
    return data;
  });
