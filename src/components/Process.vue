<script setup lang="ts">
</script>

<template>
  <section id="proceso" class="py-20 bg-fruco-light relative">
    <div class="max-w-6xl mx-auto px-4">
      <div class="text-center mb-16">
        <h2 class="text-4xl font-bold text-fruco-green-dark mb-4">Tecnología IQF</h2>
        <p class="text-xl text-gray-600 max-w-2xl mx-auto">
          Individual Quick Freezing: La mejor tecnología para conservar la frescura.
        </p>
      </div>

      <div class="grid md:grid-cols-2 gap-12 items-center">
        <div class="relative h-96 rounded-2xl overflow-hidden shadow-2xl group">
          <img 
            src="/assets/detalle-servicios.jpeg" 
            alt="Proceso IQF" 
            class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700"
          />
          <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
          <div class="absolute bottom-6 left-6 text-white">
            <p class="font-semibold text-lg">Calidad Certificada</p>
          </div>
        </div>

        <div class="space-y-8">
          <div class="flex gap-4 items-start p-6 bg-white rounded-xl shadow-sm hover:shadow-md transition-all duration-300 border-l-4 border-fruco-yellow">
            <div class="text-3xl">❄️</div>
            <div>
              <h3 class="text-xl font-bold text-gray-800 mb-2">Textura y Sabor Intactos</h3>
              <p class="text-gray-600">Mantiene la textura, sabor y nutrientes originales de la fruta recién cosechada.</p>
            </div>
          </div>

          <div class="flex gap-4 items-start p-6 bg-white rounded-xl shadow-sm hover:shadow-md transition-all duration-300 border-l-4 border-fruco-green">
            <div class="text-3xl">💎</div>
            <div>
              <h3 class="text-xl font-bold text-gray-800 mb-2">Cero Cristalización</h3>
              <p class="text-gray-600">Evita la formación de grandes cristales de hielo, preservando la estructura celular.</p>
            </div>
          </div>

          <div class="flex gap-4 items-start p-6 bg-white rounded-xl shadow-sm hover:shadow-md transition-all duration-300 border-l-4 border-fruco-green-dark">
            <div class="text-3xl">🏭</div>
            <div>
              <h3 class="text-xl font-bold text-gray-800 mb-2">Ideal para Industria</h3>
              <p class="text-gray-600">Perfecto para la industria alimentaria, repostería, smoothies y más.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>
