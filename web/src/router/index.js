import { createRouter, createWebHistory } from 'vue-router'
import CadastroEletro from '../views/CadastroEletro.vue'
import ListagemEletro from '../views/ListagemEletro.vue'
const routes = [
  {
    path: '/cadastro',
    name: 'CadastroEletro',
    component: CadastroEletro
  },
  {
    path: '/',
    name: 'ListagemEletro',
    component: ListagemEletro
  },
]

const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes
})



export default router