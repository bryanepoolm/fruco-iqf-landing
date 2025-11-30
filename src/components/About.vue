<script setup lang="ts">
</script>

<template>
  <section id="nosotros" class="py-20 bg-white relative overflow-hidden">
    <div class="max-w-6xl mx-auto px-4">
      <div class="grid md:grid-cols-2 gap-12 items-center">
        <div class="order-2 md:order-1">
          <h2 class="text-4xl font-bold text-fruco-green-dark mb-6">Nuestra Esencia</h2>
          <p class="text-lg text-gray-600 mb-6 leading-relaxed">
            Somos una empresa familiar mexicana especializada en la producción y exportación de frutas congeladas IQF. 
            Nacimos con la pasión de llevar lo mejor del campo mexicano al mundo, garantizando frescura y calidad en cada bocado.
          </p>
          <ul class="space-y-4">
            <li class="flex items-center space-x-3">
              <span class="w-2 h-2 bg-fruco-yellow rounded-full"></span>
              <span class="text-gray-700">Enfoque en calidad y trazabilidad</span>
            </li>
            <li class="flex items-center space-x-3">
              <span class="w-2 h-2 bg-fruco-yellow rounded-full"></span>
              <span class="text-gray-700">Procesos certificados</span>
            </li>
            <li class="flex items-center space-x-3">
              <span class="w-2 h-2 bg-fruco-yellow rounded-full"></span>
              <span class="text-gray-700">Cadena de frío garantizada</span>
            </li>
          </ul>
        </div>
        <div class="order-1 md:order-2 relative">
          <div class="absolute inset-0 bg-fruco-green/10 rounded-2xl transform rotate-3"></div>
          <div class="relative bg-fruco-light p-8 rounded-2xl shadow-lg border border-fruco-green/20">
             <h3 class="text-2xl font-semibold text-fruco-green-dark mb-4">Nuestros Productos</h3>
             <div class="grid grid-cols-2 gap-4">
                <div class="bg-white p-4 rounded-xl shadow-sm hover:shadow-md transition-shadow text-center">
                  <span class="block text-3xl mb-2">🍌</span>
                  <span class="font-medium text-gray-800">Plátano IQF</span>
                </div>
                <div class="bg-white p-4 rounded-xl shadow-sm hover:shadow-md transition-shadow text-center">
                  <span class="block text-3xl mb-2">🍍</span>
                  <span class="font-medium text-gray-800">Piña IQF</span>
                </div>
                <div class="bg-white p-4 rounded-xl shadow-sm hover:shadow-md transition-shadow text-center">
                  <span class="block text-3xl mb-2">🥭</span>
                  <span class="font-medium text-gray-800">Mango IQF</span>
                </div>
                <div class="bg-white p-4 rounded-xl shadow-sm hover:shadow-md transition-shadow text-center">
                  <span class="block text-3xl mb-2">🍓</span>
                  <span class="font-medium text-gray-800">Berries IQF</span>
                </div>
             </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>
