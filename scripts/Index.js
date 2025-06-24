// ===== CAMBIO DE FONDOS AL PASAR EL MOUSE ===== //
const fondo = document.querySelector(".wrapper-inicio");
const electronica = document.querySelector(".especialidades a:nth-child(1)");
const programacion = document.querySelector(".especialidades a:nth-child(2)");
const inscripciones = document.querySelector(".celeste#inscripciones");
const campos = document.querySelector(".celeste#campos");
const directivos = document.querySelector(".directivos");

// Función para cambiar y restaurar fondo
function cambiarFondo(elemento, imagen) {
	elemento.addEventListener("mouseenter", () => {
		fondo.style.backgroundImage = `url('${imagen}')`;
	});
	elemento.addEventListener("mouseleave", () => {
		fondo.style.backgroundImage = "url('./img/fondos/fondo5.webp')";
	});
}

// Aplicar la función a cada sección
cambiarFondo(electronica, "./img/fondo-electronica.jpg");
cambiarFondo(programacion, "./img/programacion.png");
cambiarFondo(inscripciones, "./img/fondo-inscripciones.jpg");
cambiarFondo(campos, "./img/sedeuniversidad.jpg");
cambiarFondo(directivos, "./img/fondo-directivos.jpg");

// ===== ANIMACIÓN DE IMÁGENES E INFORMACIÓN AL APARECER ===== //
// document.addEventListener("DOMContentLoaded", () => {
// 	// Selecciona imágenes y el título grande
// 	const images = document.querySelectorAll("img");
// 	const container = document.querySelector(".container");
// 	const textElements = document.querySelectorAll(".text");

// 	// Unir todos los elementos a observar
// 	const elementosAObservar = [...images, container, ...textElements];

// 	// Crear un solo observador para todo
// 	const observer = new IntersectionObserver(
// 		(entries) => {
// 			entries.forEach((entry) => {
// 				if (entry.isIntersecting) {
// 					entry.target.classList.add("visible");
// 					entry.target.classList.add("img-visible");
// 				} else {
// 					entry.target.classList.remove("visible");
// 					entry.target.classList.remove("img-visible");
// 				}
// 			});
// 		},
// 		{ threshold: 0.5 }
// 	);

// 	// Observar cada uno
// 	elementosAObservar.forEach((el) => observer.observe(el));
// });
