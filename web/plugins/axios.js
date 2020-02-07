import axios from 'axios'

export default axios.create({
  baseURL: 'http://localhost:81/api'
})
