<script setup lang="ts">
const images = [
  {
    src: "/assets/preparando-mercania/IMG_3066.JPG",
    alt: "Proceso de empaquetado de fruta congelada",
    title: "Selección y Pesaje",
  },
  {
    src: "/assets/preparando-mercania/IMG_3067.JPG",
    alt: "Personal calificado en línea de empaque",
    title: "Personal Calificado",
  },
  {
    src: "/assets/preparando-mercania/IMG_3070.JPG",
    alt: "Verificación de calidad en empaque",
    title: "Control de Calidad",
  },
  {
    src: "/assets/preparando-mercania/IMG_3074.JPG",
    alt: "Producto terminado listo para exportación",
    title: "Listo para Exportar",
  },
];
</script>

<template>
  <section id="galeria-empaque" class="py-20 bg-gray-50 relative overflow-hidden">
    <!-- Decorative background elements -->
    <div class="absolute top-0 left-0 w-96 h-96 bg-fruco-green/5 rounded-full blur-3xl -translate-x-1/2 -translate-y-1/2"></div>
    <div class="absolute bottom-0 right-0 w-96 h-96 bg-fruco-yellow/5 rounded-full blur-3xl translate-x-1/2 translate-y-1/2"></div>

    <div class="max-w-7xl mx-auto px-4 relative z-10">
      <div class="text-center mb-16">
        <h2 class="text-4xl font-bold text-fruco-green-dark mb-4">
          Proceso de Empaquetado
        </h2>
        <p class="text-xl text-gray-600 max-w-3xl mx-auto">
          Cuidamos cada detalle en el empaquetado de nuestra fruta IQF para garantizar que llegue en perfectas condiciones a su destino.
        </p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
        <div
          v-for="(image, index) in images"
          :key="index"
          class="group relative h-80 rounded-2xl overflow-hidden shadow-lg cursor-pointer"
        >
          <img
            :src="image.src"
            :alt="image.alt"
            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110"
            loading="lazy"
          />
          
          <!-- Overlay -->
          <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent opacity-80 transition-opacity duration-300"></div>
          
          <!-- Content -->
          <div class="absolute bottom-0 left-0 w-full p-6 transform translate-y-2 group-hover:translate-y-0 transition-transform duration-300">
            <h3 class="text-white text-xl font-bold mb-2 border-l-4 border-fruco-yellow pl-3">
              {{ image.title }}
            </h3>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>
