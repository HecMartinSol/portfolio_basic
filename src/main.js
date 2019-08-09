import Vue from 'vue'
import App from './App.vue'

// Para instalar el router de Vue (no viene por defecto)
// npm install vue-router --save
import VueRouter from 'vue-router'
Vue.use(VueRouter);
import {rutas} from './rutas.js';
const myRouter = new VueRouter({
	routes 	: rutas,
	mode 	: 'history' // quita el # de la ruta
});

new Vue({
	el: '#app',
	router : myRouter,	// se incluye el router que sino no funciona
	render: h => h(App)
})
