import LogoComponent from "./components/LogoComponent.vue";
import About from "./components/About.vue";
import Career from "./components/Career.vue";
import Tech from "./components/Tech.vue";
import Contact from "./components/Contact.vue";
/**
import InfoUsuarioComponent from "./components/InfoUsuario.vue";

// import UsuariosComponent from "./components/Usuarios.vue";
//lazy loading (para cargar solo una parte de la aplicacion cuando sea requerido para más rapidez)
const UsuariosComponent = resolve => {
	require.ensure(['./components/Usuarios.vue'], () => {
		resolve(require('./components/Usuarios.vue'));
	})
}
*/
export const rutas = [
	{path : '/', 		component : LogoComponent, 	name:'home'},
	{path : '/about', 	component : About, 			name:'about'},
	{path : '/career', 	component : Career, 		name:'career'},
	{path : '/tech', 	component : Tech, 			name:'tech'},
	{path : '/contact', component : Contact, 		name:'contact'},

	/**
	{path : '/inicio', 		component : LogoComponent},
	
	// children para subrutas
	{path : '/usuarios', 	component : UsuariosComponent, name : "usuarios", children : [
			// dos puntos para el parametro
			{path : ':id', 		component : InfoUsuarioComponent, name : "infousuario"} // name = alias de ruta
		]
	},
	
	// redirecciones
	{path : '/users', 	redirect : {name:"usuarios"}},
	*/
	{path : '*', 	redirect : "/"}, // ruta por defecto (404)
];