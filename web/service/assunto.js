import http from './base/http';

const CONTROLLER = 'assuntos';

export const buscar = coResponsavel => http.get(CONTROLLER);
