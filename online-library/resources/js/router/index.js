import { createRouter, createWebHistory } from 'vue-router';
import OnlineLibrary from '../Components/OnlineLibrary.vue';
import MyLibrary from '../Components/MyLibrary.vue';

const routes = [
  { path: '/online-library', component: OnlineLibrary },
  { path: '/my-library', component: MyLibrary },
  { path: '/', redirect: '/online-library' }
];

const router = createRouter({
  history: createWebHistory(),
  routes
});

export default router;
