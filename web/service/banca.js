import Http from './base/http';

const service = new Http('');
const endpoint = 'bancas';

export const buscar = params => service.get(endpoint, { params });
