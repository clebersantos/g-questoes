import axios from 'axios'

const standard = axios.create({
  baseURL: `${process.env.VUE_APP_API_HOST}\\${process.env.VUE_APP_API_PORT}/api`,
  timeout: 100000,
  transformResponse: [
    function (data) {
      return data
    }
  ]
});

// standard.interceptors.response.use(..., ...)
standard.interceptors.request.use((config) => {
  // const token = localStorage.getItem('access_token');
  // if (token != null) {
  //   config.headers.Authorization = `Bearer ${token}`;
  // }
  return config;
}, (error) => {
  // eslint-disable-next-line no-console
  console.log('error request', error);
  return Promise.reject(error);
});

standard.interceptors.response.use((response) => {
  // console.log('response', response);
  return response;
}, (error) => {
  // eslint-disable-next-line no-console
  console.log('error response', error);
  if (error.response.status === 401) {
    const requestConfig = error.config;
    return axios(requestConfig);
  }
  return Promise.reject(error);
});

export default standard
